<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'quiz_answersheets', language 'en'
 *
 * @package   quiz_answersheets
 * @copyright 2019 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['answersheets'] = 'Ekspordi sooritused';
$string['answersheetsfilename'] = 'Exportable_quiz_attempts';
$string['answersheetsreport'] = 'Ekspordi testi sooritused';
$string['admin_instruction_message'] = 'Juhised';
$string['admin_instruction_message_des'] = 'If set, this text will be shown at the top of the report. You can use this, for example, to link to any institutional policies about printing summative quizzes.';
$string['answersheets:bulkdownload'] = 'Laadige tulemused hulgi alla';
$string['answersheets:componentname'] = 'Ekspordi testi sooritused';
$string['answersheets:createattempt'] = 'Looge sooritus teisele kasutajale';
$string['answersheets:submitresponses'] = 'Esita tudengi vastus';
$string['answersheets:view'] = 'Vaata sooritust';
$string['answersheets:viewrightanswers'] = 'Vaata õigeid tulemusi';
$string['answer_sheet_label'] = 'Õigete vastuste leht';
$string['attempt_sheet_label'] = 'Soorituse leht';
$string['answer_sheet_title'] = '{$a->courseshortname} - {$a->quizname} - Vastuste leht';
$string['attempt_sheet_title'] = '{$a->courseshortname} - {$a->quizname} - Soorituse leht';
$string['bulkdownloadlink'] = 'Download review sheets in bulk';
$string['bulkinstructions'] = 'To be able to download review sheets in bulk, you need the
`save-answersheets` tool on your computer. Once you have that:

1. The attempts that will be downloaded when you follow these instructions are based on the settings of the report you just left.
   What this process will do is effectively follow every **Review sheet** link there. So, if you are in any doubt, go back and
   check the report is showing the attempts you want exported.
2. Once you are satisfied, download the [bulk download steps file]({$a->scripturl}) that will tell `save-answersheets` what to do.
   **Don\'t forget the warning above!**
3. Save that file (which should be called `{$a->scriptname}-steps.txt`) in the same folder where you have `save-answersheets`
   on your computer.
4. Open a command prompt and go to that folder.
5. Type the command `.\save-answersheets \'{$a->scriptname}-steps.txt\'` and wait for it to run. It outputs what it is doing as it goes.
6. Once the script has finished, you should have a file `{$a->scriptname}.zip` inside the `output` folder.
7. Remember to delete the `{$a->scriptname}-steps.txt` file.

If you only want the files for one student, you can run a command like
`.\save-answersheets --download-only \'X1234567\' \'{$a->scriptname}-steps.txt\'`

If you only need the attachments, without the PDF of the review page, then add `--skip-pdfs` to the command. This is much faster.
Example command: `.\save-answersheets --skip-pdfs \'{$a->scriptname}-steps.txt\'`.

These two options can be combined, e.g. `.\save-answersheets --skip-pdfs --download-only \'X1234567\' \'{$a->scriptname}-steps.txt\'`.

If you run any of these commands again, they will just download files which have not already been fetched. This can be helpful,
for example if just a few additional students have attempted the quiz.';
$string['bulkinstructionstitle'] = 'Instructions for downloading review sheets in bulk';
$string['bulkinstructionswarning'] = '<b>Warning</b>! the file you download in Step 2 of the instructions below contains enough
information for the tool to access the quiz attempts to be saved using your current login session. You <b>must</b> delete
that file as soon as you have finished with it. Retaining it is a security risk.';
$string['column_answer_sheet'] = 'Vastuste lehed';
$string['column_attempt_sheet'] = 'Soorituse lehed';
$string['column_submit_student_responses'] = 'Submit student responses';
$string['combine_feedback_correct'] = 'Kui on õige:';
$string['combine_feedback_general'] = 'Üldine tagasiside ja edasine info:';
$string['combine_feedback_incorrect'] = 'Kui on vale:';
$string['combine_feedback_partially_correct'] = 'If partially correct:';
$string['create_attempt'] = 'Loo uus sooritus';
$string['create_attempt_modal_button'] = 'Loo';
$string['create_attempt_modal_description'] = 'Are you sure you want to create a quiz attempt for {$a}?';
$string['create_attempt_modal_title'] = 'Kinnitus';
$string['event_attempt_created'] = 'Quiz attempt created for user';
$string['event_attempt_viewed'] = 'Quiz attempt sheet viewed';
$string['event_attempt_printed'] = 'Quiz attempt sheet printed';
$string['event_right_answer_viewed'] = 'Quiz right answer sheet viewed';
$string['event_right_answer_printed'] = 'Quiz right answer sheet printed';
$string['event_responses_submitted'] = 'Quiz responses submitted for user';
$string['examcode'] = 'Confirmation code';
$string['interactive_content_warning'] = 'Interactive content is not available in this format.';
$string['no_response_recorded'] = 'No response recorded.';
$string['page_type_attempt'] = 'Attempt sheet';
$string['page_type_review'] = 'Review sheet';
$string['page_type_answer'] = 'Answer sheet';
$string['pluginname'] = 'Export quiz attempts';
$string['print'] = 'Print';
$string['privacy:metadata'] = 'The Export quiz attempts plugin does not store any personal data itself. It provides an additional interface for viewing and managing the data owned by the quiz activity.';
$string['print_header'] = '{$a->courseshortname} / {$a->quizname} / {$a->studentname} / Loodud: {$a->generatedtime} - {$a->sheettype}';
$string['print_header_minimised'] = '{$a->courseshortname} / {$a->quizname} / Loodud: {$a->generatedtime} / - {$a->sheettype}';
$string['review_sheet_label'] = 'Ülevaatus';
$string['review_sheet_title'] = '{$a->courseshortname} - {$a->quizname} - Review sheet';
$string['response_recorded'] = 'Response recorded: {$a}.';
$string['showquestioninstruction'] = 'Show default instruction text?';
$string['showuserinfo'] = 'Identifying information to show about users';
$string['submit_student_responses_label'] = 'Submit responses...';
$string['submit_student_responses_on_behalf'] = 'Submit responses on behalf of {$a} and finish attempt';
$string['submit_student_responses_dialog_content'] = 'Are you sure you want to submit?';
$string['submit_student_responses_title'] = '{$a}: Submit student responses';
$string['strftime_header'] = '%d.%m.%Y %H:%M';
$string['user_identity_fields'] = ' ({$a})';
$string['webservicecannotcreateattempts'] = 'Sooritust ei saa luua';

// Question instruction.
$string['coderunner_instruction'] = 'Kirjutage oma vastus selleks ettenähtud kohta.';
$string['ddwtos_instruction'] = 'Kirjutage vastava vastuse täht (A, B, C, D, ...) selleks ettenähtud kohta. Pärast seda, kui üksus on maksimaalne kasutuskordade arv. nt. (1) tähendab, et eset saab kasutada üks kord, (2) tähendab kaks korda jne. Tärn () tähendab, et eseme kasutamine on piiramatu.';
$string['ddmarker_instruction'] = 'Märkige pildil olevad punktid ja kirjutage nende kõrvale vastava vastuse täht (A, B, C, D, …). Pärast seda, kui üksus on maksimaalne kasutuskordade arv. nt. (1) tähendab, et eset saab kasutada üks kord, (2) tähendab kaks korda jne. Tärn () tähendab, et eseme kasutamine on piiramatu.';
$string['ddimageortext_instruction'] = 'Märkige pildil olevad punktid ja kirjutage nende kõrvale vastava vastuse täht (A, B, C, D, …). Pärast seda, kui üksus on maksimaalne kasutuskordade arv. nt. (1) tähendab, et eset saab kasutada üks kord, (2) tähendab kaks korda jne. Tärn () tähendab, et eseme kasutamine on piiramatu.';
$string['essay_instruction'] = 'Kirjutage oma vastus selleks ettenähtud kohta.';
$string['match_instruction'] = 'Kirjutage vastava vastuse täht (A, B, C, D, ...) selleks ettenähtud kohta.';
$string['multichoice_instruction'] = 'Vali õige vastus.';
$string['numerical_instruction'] = 'Kirjutage oma vastus (numbrilises väärtuses) selleks ettenähtud kohta.';
$string['ordering_instruction'] = 'Kirjutage õige järjekord selleks ettenähtud kohta.';
$string['oumultiresponse_instruction'] = 'Valige õige(d) vastus(ed).';
$string['pmatch_instruction'] = 'Kirjutage oma vastus selleks ettenähtud kohta. Palun hoidke seda ühe või kahe lausega.';
$string['pmatchjme_instruction'] = 'Kirjutage oma vastus selleks ettenähtud kohta.';
$string['gapselect_instruction'] = 'Kirjutage vastava vastuse täht (A, B, C, D, ...) selleks ettenähtud kohta.';
$string['shortanswer_instruction'] = 'Kirjutage oma vastus selleks ettenähtud kohta. Palun hoidke seda ühe või kahe lausega.';
$string['stack_instruction'] = 'Kirjutage oma vastus selleks ettenähtud kohta.';
$string['truefalse_instruction'] = 'Vali õige vastus.';
$string['varnumeric_instruction'] = 'Kirjutage oma vastus selleks ettenähtud kohta.';
$string['varnumericset_instruction']='Kirjutage oma vastus selleks ettenähtud kohta.';
$string['varnumunit_instruction']='Kirjutage oma vastus selleks ettenähtud kohta.';
$string['wordselect_instruction']='Valige vastus(ed), tehes võtmesõna(de) ümber ringi.';
