<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Laratrust\Models\LaratrustPermission;

class CustomAuth {

    public function handle($request, Closure $next) {
        //if user not logged in redirect:
        $oLoggedUser = Auth::user();
        $roleTypeId = isset($oLoggedUser->role_type_id) ? $oLoggedUser->role_type_id : null;
        $userId = isset($oLoggedUser->id) ? $oLoggedUser->id : null;
        if ($userId) {
            $bAllow = false;
            $route = $request->route();
            $actions = $route->getAction();
            $method = null;
            if (isset($actions['controller'])) {
                $method = $actions['controller'];
            }
            //get permission
            $aController = $this->extractControllerAndAction($method);
            $controllerName = $aController['controller'];
            $actionName = $aController['action'];
            $userRoleType = $request->user()->role_type_id;
            if ($controllerName && $actionName) {
                $permission = $this->getPermission($controllerName, $actionName, $userRoleType);
                if ($permission && Laratrust::can($permission)) {
                    $bAllow = true;
                } else if (!$permission)
                    $bAllow = true;
            }
            if ($bAllow) {
                return $next($request);
            } else {
                return redirect('/access-denied');
            }            
        } else {
            return redirect('/');
        }
    }

    private function extractControllerAndAction($action) {
        $aAction = explode('@', $action);
        $controller = isset($aAction[0]) ? $aAction[0] : null;
        $actionName = isset($aAction[1]) ? trim($aAction[1]) : null;
        $controllerName = trim(str_replace("App\\Http\\Controllers\\", "", $controller));
        return [
            'controller' => $controllerName,
            'action' => $actionName
        ];
    }

    private function getPermission($controller, $action) {
        $aPermission = LaratrustPermission::
                        where('controller', '=', $controller)
                        ->where('action', '=', $action)
                        ->get()->first();
        $permissionName = isset($aPermission->name) ? $aPermission->name : null;
        return $permissionName;
    }

}
