<?php

use Illuminate\Database\Seeder;
use App\Models\PermissionRole;
use App\Models\Permission;
use App\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
                    [
                    "name"=>"list_task",
                    "permission_type"=>5,
                    "display_name"=>"List Task",
                    "action"=>"index",
                    "controller"=>"Backend\TaskLists\TaskListsController",
                    "module"=>"Task Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_task",
                    "permission_type"=>5,
                    "display_name"=>"View Task",
                    "action"=>"fetchTasks",
                    "controller"=>"Backend\TaskLists\TaskListsController",
                    "module"=>"Task Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_task",
                    "permission_type"=>5,
                    "display_name"=>"Add Task",
                    "action"=>"addTask",
                    "controller"=>"Backend\TaskLists\TaskListsController",
                    "module"=>"Task Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_task",
                    "permission_type"=>5,
                    "display_name"=>"Edit Task",
                    "action"=>"editSingleTask",
                    "controller"=>"Backend\TaskLists\TaskListsController",
                    "module"=>"Task Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_task",
                    "permission_type"=>5,
                    "display_name"=>"Delete Task",
                    "action"=>"deleteTask",
                    "controller"=>"Backend\TaskLists\TaskListsController",
                    "module"=>"Task Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"finish_task",
                    "permission_type"=>5,
                    "display_name"=>"Finish Task",
                    "action"=>"finishTask",
                    "controller"=>"Backend\TaskLists\TaskListsController",
                    "module"=>"Task Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"update_recommendation",
                    "permission_type"=>5,
                    "display_name"=>"Update Task Recommendation",
                    "action"=>"updateRecommendation",
                    "controller"=>"Backend\TaskLists\TaskListsController",
                    "module"=>"Task Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_candidate",
                    "permission_type"=>5,
                    "display_name"=>"List Candidate",
                    "action"=>"index",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_candidate",
                    "permission_type"=>5,
                    "display_name"=>"View Candidate",
                    "action"=>"view",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_candidate",
                    "permission_type"=>1,
                    "display_name"=>"Add Candidate",
                    "action"=>"add",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_candidate",
                    "permission_type"=>1,
                    "display_name"=>"Edit Candidate",
                    "action"=>"edit",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_candidate",
                    "permission_type"=>1,
                    "display_name"=>"Delete Candidate",
                    "action"=>"delete",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
            
                    [
                    "name"=>"add_tag_candidate",
                    "permission_type"=>5,
                    "display_name"=>"Add Tag",
                    "action"=>"addTag",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
            
                    [
                    "name"=>"edi_tag_candidate",
                    "permission_type"=>5,
                    "display_name"=>"Edit Tag",
                    "action"=>"editTag",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_tag_candidate",
                    "permission_type"=>5,
                    "display_name"=>"Delete Tag",
                    "action"=>"deleteTag",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
            
                    [
                    "name"=>"add_note_candidate",
                    "permission_type"=>5,
                    "display_name"=>"Add Note",
                    "action"=>"addNote",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_note_candidate",
                    "permission_type"=>5,
                    "display_name"=>"Edit Note",
                    "action"=>"editNote",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_note_candidate",
                    "permission_type"=>5,
                    "display_name"=>"Delete Note",
                    "action"=>"deleteNote",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
            
                    [
                    "name"=>"attach_file_candidate",
                    "permission_type"=>5,
                    "display_name"=>"Attach File",
                    "action"=>"attachFile",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
            
                    [
                    "name"=>"delete_file_candidate",
                    "permission_type"=>5,
                    "display_name"=>"Delete File",
                    "action"=>"deleteAttachment",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
            
                    [
                    "name"=>"block_candidate",
                    "permission_type"=>5,
                    "display_name"=>"Block Candidate",
                    "action"=>"blockCandidate",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"copy_to_folder_candidate",
                    "permission_type"=>5,
                    "display_name"=>"Copy To Folder",
                    "action"=>"copyToFolder",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"export_cv_candidate",
                    "permission_type"=>5,
                    "display_name"=>"Export CV",
                    "action"=>"export",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Candidate",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_folder",
                    "permission_type"=>5,
                    "display_name"=>"List Folder",
                    "action"=>"getFoldersPage",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Folder",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_folder",
                    "permission_type"=>5,
                    "display_name"=>"View Folder",
                    "action"=>"view",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Folder",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_folder",
                    "permission_type"=>5,
                    "display_name"=>"Add Folder",
                    "action"=>"createFolders",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Folder",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_folder",
                    "permission_type"=>5,
                    "display_name"=>"Edit Folder",
                    "action"=>"updateFolders",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Folder",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_folder",
                    "permission_type"=>5,
                    "display_name"=>"Delete Folder",
                    "action"=>"deleteFolder",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Folder",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_saved_search",
                    "permission_type"=>5,
                    "display_name"=>"View Saved Search",
                    "action"=>"view",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Saved Search",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_saved_search",
                    "permission_type"=>5,
                    "display_name"=>"List Saved Search",
                    "action"=>"getSavedSearchPage",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Saved Search",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_saved_search",
                    "permission_type"=>5,
                    "display_name"=>"Delete Saved Search",
                    "action"=>"deleteSavedSearchHistory",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Saved Search",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_saved_search",
                    "permission_type"=>5,
                    "display_name"=>"Add Saved Search",
                    "action"=>"edit",
                    "controller"=>"Backend\Cv\CandidateController",
                    "module"=>"Saved Search",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_job",
                    "permission_type"=>5,
                    "display_name"=>"List Job",
                    "action"=>"index",
                    "controller"=>"Backend\Job\JobController",
                    "module"=>"Job",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"job_applicants",
                    "permission_type"=>5,
                    "display_name"=>"View Applicants",
                    "action"=>"applicants",
                    "controller"=>"Backend\Job\JobController",
                    "module"=>"Job",
                    "created_at"=>date('Y-m-d H:i:s')
                    ]
                    ,
                    [
                    "name"=>"view_job",
                    "permission_type"=>5,
                    "display_name"=>"View Job",
                    "action"=>"view",
                    "controller"=>"Backend\Job\JobController",
                    "module"=>"Job",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_job",
                    "permission_type"=>5,
                    "display_name"=>"Add Job",
                    "action"=>"add",
                    "controller"=>"Backend\Job\JobController",
                    "module"=>"Job",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_job",
                    "permission_type"=>5,
                    "display_name"=>"Edit Job",
                    "action"=>"edit",
                    "controller"=>"Backend\Job\JobController",
                    "module"=>"Job",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_job",
                    "permission_type"=>5,
                    "display_name"=>"Delete Job",
                    "action"=>"delete",
                    "controller"=>"Backend\Job\JobController",
                    "module"=>"Job",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"activate_job",
                    "permission_type"=>5,
                    "display_name"=>"Activate Job",
                    "action"=>"delete",
                    "controller"=>"Backend\Job\JobController",
                    "module"=>"Job",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_applicant",
                    "permission_type"=>5,
                    "display_name"=>"List Applicant",
                    "action"=>"fetchApplicants",
                    "controller"=>"Backend\Job\ApplicantController",
                    "module"=>"Applicant",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_applicant",
                    "permission_type"=>5,
                    "display_name"=>"View Applicant",
                    "action"=>"viewApplicant",
                    "controller"=>"Backend\Job\ApplicantController",
                    "module"=>"Applicant",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_current_stage",
                    "permission_type"=>5,
                    "display_name"=>"View Current Stage",
                    "action"=>"getCurrentStage",
                    "controller"=>"Backend\JobApplicantController",
                    "module"=>"Applicant",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"update_stage",
                    "permission_type"=>5,
                    "display_name"=>"Update Stage",
                    "action"=>"updateStage",
                    "controller"=>"Backend\JobApplicantController",
                    "module"=>"Applicant",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"send_offer_letter",
                    "permission_type"=>5,
                    "display_name"=>"Send Offer Letter",
                    "action"=>"sendOfferLetter",
                    "controller"=>"Backend\JobApplicantController",
                    "module"=>"Applicant",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"applicant_document_request",
                    "permission_type"=>5,
                    "display_name"=>"Document Request",
                    "action"=>"documentRequest",
                    "controller"=>"Backend\JobApplicantController",
                    "module"=>"Applicant",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"applicant_view_document",
                    "permission_type"=>5,
                    "display_name"=>"View Documents",
                    "action"=>"viewDocument",
                    "controller"=>"Backend\JobApplicantController",
                    "module"=>"Applicant",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_interview",
                    "permission_type"=>5,
                    "display_name"=>"List Interview",
                    "action"=>"index",
                    "controller"=>"Backend\Interview\InterviewController",
                    "module"=>"Interview Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_interview",
                    "permission_type"=>5,
                    "display_name"=>"View Interview",
                    "action"=>"view",
                    "controller"=>"Backend\Interview\InterviewController",
                    "module"=>"Interview Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_interview",
                    "permission_type"=>5,
                    "display_name"=>"Add Interview",
                    "action"=>"getPage",
                    "controller"=>"Backend\Interview\InterviewController",
                    "module"=>"Interview Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_interview",
                    "permission_type"=>5,
                    "display_name"=>"Edit Interview",
                    "action"=>"edit",
                    "controller"=>"Backend\Interview\InterviewController",
                    "module"=>"Interview Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_interview",
                    "permission_type"=>5,
                    "display_name"=>"Delete Interview",
                    "action"=>"delete",
                    "controller"=>"Backend\Interview\InterviewController",
                    "module"=>"Interview Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"schedule_interview",
                    "permission_type"=>5,
                    "display_name"=>"Schedule Interview",
                    "action"=>"getSchedulePage",
                    "controller"=>"Backend\Interview\InterviewController",
                    "module"=>"Interview Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"invite_candidate",
                    "permission_type"=>5,
                    "display_name"=>"Invite Candidate",
                    "action"=>"InvitePage",
                    "controller"=>"Backend\Interview\InterviewController",
                    "module"=>"Interview Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_letter",
                    "permission_type"=>5,
                    "display_name"=>"List Letter",
                    "action"=>"index",
                    "controller"=>"Backend\Templates\LetterController",
                    "module"=>"Letter",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_letter",
                    "permission_type"=>5,
                    "display_name"=>"View Letter",
                    "action"=>"view",
                    "controller"=>"Backend\Templates\LetterController",
                    "module"=>"Letter",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_letter",
                    "permission_type"=>5,
                    "display_name"=>"Add Letter",
                    "action"=>"addLetter",
                    "controller"=>"Backend\Templates\LetterController",
                    "module"=>"Letter",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_letter",
                    "permission_type"=>5,
                    "display_name"=>"Edit Letter",
                    "action"=>"editLetter",
                    "controller"=>"Backend\Templates\LetterController",
                    "module"=>"Letter",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_letter",
                    "permission_type"=>5,
                    "display_name"=>"Delete Letter",
                    "action"=>"deleteLetter",
                    "controller"=>"Backend\Templates\LetterController",
                    "module"=>"Letter",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_questionnaire",
                    "permission_type"=>5,
                    "display_name"=>"List Questionnaire",
                    "action"=>"getTemplateList",
                    "controller"=>"Backend\Questionnaire\QuestionnaireController",
                    "module"=>"Questionnaire",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_questionnaire",
                    "permission_type"=>5,
                    "display_name"=>"View Questionnaire",
                    "action"=>"addNewTemplate",
                    "controller"=>"Backend\Questionnaire\QuestionnaireController",
                    "module"=>"Questionnaire",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_questionnaire",
                    "permission_type"=>5,
                    "display_name"=>"Add Questionnaire",
                    "action"=>"addQuestion",
                    "controller"=>"Backend\Questionnaire\QuestionnaireController",
                    "module"=>"Questionnaire",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_questionnaire",
                    "permission_type"=>5,
                    "display_name"=>"Edit Questionnaire",
                    "action"=>"getTemplate",
                    "controller"=>"Backend\Questionnaire\QuestionnaireController",
                    "module"=>"Questionnaire",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_questionnaire",
                    "permission_type"=>5,
                    "display_name"=>"Delete Questionnaire",
                    "action"=>"deleteQuestion",
                    "controller"=>"Backend\Questionnaire\QuestionnaireController",
                    "module"=>"Questionnaire",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_document_request",
                    "permission_type"=>5,
                    "display_name"=>"List Document Request",
                    "action"=>"index",
                    "controller"=>"Backend\Templates\DocumentRequestController",
                    "module"=>"Document Request",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_document_request",
                    "permission_type"=>5,
                    "display_name"=>"View Document Request",
                    "action"=>"view",
                    "controller"=>"Backend\Templates\DocumentRequestController",
                    "module"=>"Document Request",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_document_request",
                    "permission_type"=>5,
                    "display_name"=>"Add Document Request",
                    "action"=>"addRequest",
                    "controller"=>"Backend\Templates\DocumentRequestController",
                    "module"=>"Document Request",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_document_request",
                    "permission_type"=>5,
                    "display_name"=>"Edit Document Request",
                    "action"=>"editRequest",
                    "controller"=>"Backend\Templates\DocumentRequestController",
                    "module"=>"Document Request",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_document_request",
                    "permission_type"=>5,
                    "display_name"=>"Delete Document Request",
                    "action"=>"deleteDocumentRequest",
                    "controller"=>"Backend\Templates\DocumentRequestController",
                    "module"=>"Document Request",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"change_status_document_request",
                    "permission_type"=>5,
                    "display_name"=>"Change Status Document Request",
                    "action"=>"deleteDocumentRequest",
                    "controller"=>"Backend\Templates\DocumentRequestController",
                    "module"=>"Document Request",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_offer_letter",
                    "permission_type"=>5,
                    "display_name"=>"List Offer Letter",
                    "action"=>"index",
                    "controller"=>"Backend\Templates\OfferLetterController",
                    "module"=>"Offer Letter",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_offer_letter",
                    "permission_type"=>5,
                    "display_name"=>"View Offer Letter",
                    "action"=>"view",
                    "controller"=>"Backend\Templates\OfferLetterController",
                    "module"=>"Offer Letter",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_offer_letter",
                    "permission_type"=>5,
                    "display_name"=>"Add Offer Letter",
                    "action"=>"add",
                    "controller"=>"Backend\Templates\OfferLetterController",
                    "module"=>"Offer Letter",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_offer_letter",
                    "permission_type"=>5,
                    "display_name"=>"Edit Offer Letter",
                    "action"=>"edit",
                    "controller"=>"Backend\Templates\OfferLetterController",
                    "module"=>"Offer Letter",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_offer_letter",
                    "permission_type"=>5,
                    "display_name"=>"Delete Offer Letter",
                    "action"=>"delete",
                    "controller"=>"Backend\Templates\OfferLetterController",
                    "module"=>"Offer Letter",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_user",
                    "permission_type"=>5,
                    "display_name"=>"List User",
                    "action"=>"index",
                    "controller"=>"Backend\SystemAdmin\UserManagement\UserController",
                    "module"=>"User Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_user",
                    "permission_type"=>5,
                    "display_name"=>"View User",
                    "action"=>"view",
                    "controller"=>"Backend\SystemAdmin\UserManagement\UserController",
                    "module"=>"User Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_user",
                    "permission_type"=>5,
                    "display_name"=>"Add User",
                    "action"=>"addUser",
                    "controller"=>"Backend\SystemAdmin\UserManagement\UserController",
                    "module"=>"User Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_user",
                    "permission_type"=>5,
                    "display_name"=>"Edit User",
                    "action"=>"editUser",
                    "controller"=>"Backend\SystemAdmin\UserManagement\UserController",
                    "module"=>"User Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_user",
                    "permission_type"=>5,
                    "display_name"=>"Delete User",
                    "action"=>"deleteUser",
                    "controller"=>"Backend\SystemAdmin\UserManagement\UserController",
                    "module"=>"User Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_role",
                    "permission_type"=>5,
                    "display_name"=>"List Role",
                    "action"=>"index",
                    "controller"=>"Backend\SystemAdmin\UserManagement\RoleController",
                    "module"=>"Role",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_role",
                    "permission_type"=>5,
                    "display_name"=>"View Role",
                    "action"=>"view",
                    "controller"=>"Backend\SystemAdmin\UserManagement\RoleController",
                    "module"=>"Role",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_role",
                    "permission_type"=>5,
                    "display_name"=>"Add Role",
                    "action"=>"addRole",
                    "controller"=>"Backend\SystemAdmin\UserManagement\RoleController",
                    "module"=>"Role",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_role",
                    "permission_type"=>5,
                    "display_name"=>"Edit Role",
                    "action"=>"editRole",
                    "controller"=>"Backend\SystemAdmin\UserManagement\RoleController",
                    "module"=>"Role",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_role",
                    "permission_type"=>5,
                    "display_name"=>"Delete Role",
                    "action"=>"deleteRole",
                    "controller"=>"Backend\SystemAdmin\UserManagement\RoleController",
                    "module"=>"Role",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_company",
                    "permission_type"=>1,
                    "display_name"=>"List Company",
                    "action"=>"ListAllCompanies",
                    "controller"=>"Backend\SystemAdmin\Company\CompanyManagementController",
                    "module"=>"Company Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_company",
                    "permission_type"=>1,
                    "display_name"=>"View Company",
                    "action"=>"view",
                    "controller"=>"Backend\SystemAdmin\Company\CompanyManagementController",
                    "module"=>"Company Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_company",
                    "permission_type"=>1,
                    "display_name"=>"Add Company",
                    "action"=>"addCompany",
                    "controller"=>"Backend\SystemAdmin\Company\CompanyManagementController",
                    "module"=>"Company Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_company",
                    "permission_type"=>5,
                    "display_name"=>"Edit Company",
                    "action"=>"editCompany",
                    "controller"=>"Backend\SystemAdmin\Company\CompanyManagementController",
                    "module"=>"Company Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_company",
                    "permission_type"=>1,
                    "display_name"=>"Delete Company",
                    "action"=>"deleteCompany",
                    "controller"=>"Backend\SystemAdmin\Company\CompanyManagementController",
                    "module"=>"Company Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"gallery_management",
                    "permission_type"=>5,
                    "display_name"=>"Manage Gallery",
                    "action"=>"gallery_list",
                    "controller"=>"Backend\SystemAdmin\Company\CompanyManagementController",
                    "module"=>"Company Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_division",
                    "permission_type"=>5,
                    "display_name"=>"List Division",
                    "action"=>"index",
                    "controller"=>"Backend\Division\DivisionController",
                    "module"=>"Division Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_division",
                    "permission_type"=>5,
                    "display_name"=>"View Division",
                    "action"=>"view",
                    "controller"=>"Backend\Division\DivisionController",
                    "module"=>"Division Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_division",
                    "permission_type"=>5,
                    "display_name"=>"Add Division",
                    "action"=>"add",
                    "controller"=>"Backend\Division\DivisionController",
                    "module"=>"Division Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_division",
                    "permission_type"=>5,
                    "display_name"=>"Edit Division",
                    "action"=>"edit",
                    "controller"=>"Backend\Division\DivisionController",
                    "module"=>"Division Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_division",
                    "permission_type"=>5,
                    "display_name"=>"Delete Division",
                    "action"=>"delete",
                    "controller"=>"Backend\Division\DivisionController",
                    "module"=>"Division Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_hiring_flow",
                    "permission_type"=>5,
                    "display_name"=>"List Hiring Flow",
                    "action"=>"index",
                    "controller"=>"Backend\HiringFlow\HiringFlowController",
                    "module"=>"Hiring Flow Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_hiring_flow",
                    "permission_type"=>5,
                    "display_name"=>"View Hiring Flow",
                    "action"=>"view",
                    "controller"=>"Backend\HiringFlow\HiringFlowController",
                    "module"=>"Hiring Flow Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_hiring_flow",
                    "permission_type"=>5,
                    "display_name"=>"Add Hiring Flow",
                    "action"=>"add",
                    "controller"=>"Backend\HiringFlow\HiringFlowController",
                    "module"=>"Hiring Flow Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_hiring_flow",
                    "permission_type"=>5,
                    "display_name"=>"Edit Hiring Flow",
                    "action"=>"updateFlowName",
                    "controller"=>"Backend\HiringFlow\HiringFlowController",
                    "module"=>"Hiring Flow Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_hiring_flow",
                    "permission_type"=>5,
                    "display_name"=>"Delete Hiring Flow",
                    "action"=>"delete",
                    "controller"=>"Backend\HiringFlow\HiringFlowController",
                    "module"=>"Hiring Flow Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_cv_source",
                    "permission_type"=>5,
                    "display_name"=>"List Cv Source",
                    "action"=>"index",
                    "controller"=>"Backend\Cv\CvSourceController",
                    "module"=>"CV Source  Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_cv_source",
                    "permission_type"=>5,
                    "display_name"=>"View Cv Source",
                    "action"=>"view",
                    "controller"=>"Backend\Cv\CvSourceController",
                    "module"=>"CV Source  Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_cv_source",
                    "permission_type"=>5,
                    "display_name"=>"Add Cv Source",
                    "action"=>"add",
                    "controller"=>"Backend\Cv\CvSourceController",
                    "module"=>"CV Source  Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_cv_source",
                    "permission_type"=>5,
                    "display_name"=>"Edit Cv Source",
                    "action"=>"edit",
                    "controller"=>"Backend\Cv\CvSourceController",
                    "module"=>"CV Source  Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_cv_source",
                    "permission_type"=>5,
                    "display_name"=>"Delete Cv Source",
                    "action"=>"delete",
                    "controller"=>"Backend\Cv\CvSourceController",
                    "module"=>"CV Source  Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_tag",
                    "permission_type"=>5,
                    "display_name"=>"List Tag",
                    "action"=>"index",
                    "controller"=>"Backend\Cv\TagController",
                    "module"=>"CV Tag Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"view_tag",
                    "permission_type"=>5,
                    "display_name"=>"View Tag",
                    "action"=>"view",
                    "controller"=>"Backend\Cv\TagController",
                    "module"=>"CV Tag Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"add_tag",
                    "permission_type"=>5,
                    "display_name"=>"Add Tag",
                    "action"=>"create",
                    "controller"=>"Backend\Cv\TagController",
                    "module"=>"CV Tag Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"edit_tag",
                    "permission_type"=>5,
                    "display_name"=>"Edit Tag",
                    "action"=>"edit",
                    "controller"=>"Backend\Cv\TagController",
                    "module"=>"CV Tag Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"delete_tag",
                    "permission_type"=>5,
                    "display_name"=>"Delete Tag",
                    "action"=>"delete",
                    "controller"=>"Backend\Cv\TagController",
                    "module"=>"CV Tag Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_wbc_configure",
                    "permission_type"=>1,
                    "display_name"=>"List Wbc Configuration",
                    "action"=>"getConfigPage",
                    "controller"=>"Backend\CreditSystem\WbcController",
                    "module"=>"WBC Configure",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"save_wbc_configure",
                    "permission_type"=>1,
                    "display_name"=>"Save Wbc Configuration",
                    "action"=>"saveConfig",
                    "controller"=>"Backend\CreditSystem\WbcController",
                    "module"=>"WBC Configure",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"save_wbc_purpose_configure",
                    "permission_type"=>1,
                    "display_name"=>"Save Wbc Purpose Configuration",
                    "action"=>"savePurposeConfig",
                    "controller"=>"Backend\CreditSystem\WbcController",
                    "module"=>"WBC Configure",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"save_wbc_referral_configure",
                    "permission_type"=>1,
                    "display_name"=>"Save Wbc Referral Configuration",
                    "action"=>"saveReferralConfig",
                    "controller"=>"Backend\CreditSystem\WbcController",
                    "module"=>"WBC Configure",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_wbc_purchase",
                    "permission_type"=>5,
                    "display_name"=>"List Wbc Purchase",
                    "action"=>"index",
                    "controller"=>"Backend\CreditSystem\WbcController",
                    "module"=>"WBC Purchase",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"list_wbc_transactions",
                    "permission_type"=>5,
                    "display_name"=>"List Wbc Transactions",
                    "action"=>"getTransactions",
                    "controller"=>"Backend\CreditSystem\WbcController",
                    "module"=>"WBC Transactions",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"manage_recruitment_reports",
                    "permission_type"=>5,
                    "display_name"=>"Recruitment Reports",
                    "action"=>"index",
                    "controller"=>"Backend\Reports\RecruitmentReportController",
                    "module"=>"Report Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"manage_talent_reports",
                    "permission_type"=>5,
                    "display_name"=>"Talent Reports",
                    "action"=>"index",
                    "controller"=>"Backend\Reports\TalentReportController",
                    "module"=>"Report Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    [
                    "name"=>"manage_jobseeker_reports",
                    "permission_type"=>5,
                    "display_name"=>"Jobseeker Reports",
                    "action"=>"index",
                    "controller"=>"Backend\Reports\JobseekerCvController",
                    "module"=>"Report Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
                    /* Permission for add city, only for system admin */
                    [
                    "name"=>"add_city",
                    "permission_type"=>1,
                    "display_name"=>"Add City",
                    "action"=>"addCity",
                    "controller"=>"Backend\SystemAdmin\LocationManagement\CityController",
                    "module"=>"Location Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],   
                    [
                    "name"=>"cv_templates",
                    "permission_type"=>5,
                    "display_name"=>"CV Templates",
                    "action"=>"index",
                    "controller"=>"Backend\Cv\CvTemplatesController",
                    "module"=>"CV Template Management",
                    "created_at"=>date('Y-m-d H:i:s')
                    ],
            
            ];

            

        DB::statement ('SET FOREIGN_KEY_CHECKS=0;');
        DB::table ('permissions')->truncate ();
        DB::table ('permissions')->insert ($data);
        DB::statement ('SET FOREIGN_KEY_CHECKS=1;');

    }
}
