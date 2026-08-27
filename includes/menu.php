<?php
$menuLoggedOut = $menuLoggedOut ?? false;

$menuSections = [
    'Home' => [
        'Home' => '/home/home.php',
        'About Us' => '/home/about-us.php',
        'Uniform' => '/home/uniform.php',
        'Camping' => '/home/camping.php',
        'Fundraising' => '/home/fundraising.php',
        'Renewing Your Membership' => '/home/renewing-your-membership.php',
        'How to Make Payments' => '/home/how-to-make-payments.php',
        'Volunteering' => '/home/volunteering.php',
        'Organization Chart' => '/home/organization-chart.php',
        'Den Leader Resources' => '/home/den-leader-resources.php',
        'Add & Update Announcements' => '/home/add-update-announcements.php',
        'Manage Custom Pages' => '/home/manage-custom-pages.php',
        'View Contacts' => '/home/view-contacts.php',
    ],
    'My Stuff' => [
        'Change My Password' => '/my-stuff/change-password.php',
        'My Contact Information' => '/my-stuff/my-info.php',
        'On-Line Payments' => '/my-stuff/online-payments.php',
        'My Family' => '/my-stuff/my-family.php',
        'Sign-Up For Upcoming Events' => '/my-stuff/sign-up-upcoming-events.php',
        'Sign-Up For Upcoming Shifts' => '/my-stuff/sign-up-upcoming-shifts.php',
        'Subscribe to Calendar' => '/my-stuff/subscribe-calendar.php',
        'My Training History' => '/my-stuff/my-training-history.php',
    ],
    'Communication' => [
        'Quick Text Message' => '/communication/quick-text-message.php',
        'Send E-Mail' => '/communication/send-email.php',
        'Send E-Mail To E-Mail Group' => '/communication/send-email-to-group.php',
        'My Inbox' => '/communication/my-inbox.php',
        'My Outbox' => '/communication/my-outbox.php',
        'My E-Mail Delivery Status' => '/communication/my-email-delivery-status.php',
        'View All E-Mail' => '/communication/view-all-email.php',
        'View E-Mail' => '/communication/view-email.php',
        'Reply E-Mail' => '/communication/reply-email.php',
        'Blocked E-Mail Addresses' => '/communication/blocked-email-addresses.php',
        'Set Up Automated Newsletter' => '/communication/setup-automated-newsletter.php',
    ],
    'Events' => [
        'Events Hub' => '/events/events-hub.php',
        'Calendar' => '/events/calendar.php',
        'Add & Update Events' => '/events/upcoming-events.php',
        'Event Documents' => '/events/event-documents.php',
        'Event Reports' => [
            'Upcoming Events Summary' => [
                'Print (Export to PDF)' => '/events/upcoming-events-summary.php?format=pdf',
                'Open in Excel' => '/events/upcoming-events-summary.php?format=xls',
            ],
            'Attendance By Event' => [
                'Print (Export to PDF)' => '/events/event-attendance.php?format=pdf',
                'Open in Excel' => '/events/event-attendance.php?format=xls',
            ],
            'Attendance By Event Type' => '/events/attendance-by-event-type.php',
            'Community Service Reports' => '/events/community-service-reports.php',
        ],
        'Event Locations' => '/events/event-locations.php',
        'Merge Duplicate Locations' => '/events/merge-duplicate-locations.php',
        'Copy An Event' => '/events/copy-an-event.php',
        'Copy Monthly Event' => '/events/copy-monthly-event.php',
        'Upload Events' => [
            'Upload Scoutbook Events' => '/events/upload-scoutbook-events.php',
        ],
    ],
    'Membership' => [
        'Membership Hub' => '/membership/membership-hub.php',
        'Quick Dial' => '/membership/quick-dial.php',
        'Active Members' => '/membership/active-members.php',
        'Inactive Members' => '/membership/inactive-members.php',
        'Transfer Scouts' => '/membership/transfer-scouts.php',
        'Merge Duplicate Members' => '/membership/merge-duplicate-members.php',
        'Membership Reports' => [
            'Membership Directory' => [
                'Print (Export to PDF)' => '/membership/membership-directory.php?format=pdf',
                'Open in Excel' => '/membership/membership-directory.php?format=xls',
            ],
            'Leader Directory' => [
                'Print (Export to PDF)' => '/membership/leader-directory.php?format=pdf',
                'Open in Excel' => '/membership/leader-directory.php?format=xls',
            ],
            'Contact List' => [
                'Print (Export to PDF)' => '/membership/contact-list.php?format=pdf',
                'Open in Excel' => '/membership/contact-list.php?format=xls',
            ],
            'Emergency Contact List' => [
                'Print (Export to PDF)' => '/membership/emergency-contact-list.php?format=pdf',
                'Open in Excel' => '/membership/emergency-contact-list.php?format=xls',
            ],
            'Den List By Member Name' => [
                'Print (Export to PDF)' => '/membership/den-list-by-member-name.php?format=pdf',
                'Open in Excel' => '/membership/den-list-by-member-name.php?format=xls',
            ],
            'Den List By Den' => [
                'Print (Export to PDF)' => '/membership/den-list-by-den.php?format=pdf',
                'Open in Excel' => '/membership/den-list-by-den.php?format=xls',
            ],
            'Den List With Parent Info' => [
                'Print (Export to PDF)' => '/membership/den-list-with-parent-info.php?format=pdf',
                'Open in Excel' => '/membership/den-list-with-parent-info.php?format=xls',
            ],
            'Members With Allergies Or Dietary Restrictions' => [
                'Print (Export to PDF)' => '/membership/members-with-allergies-or-dietary-restrictions.php?format=pdf',
                'Open in Excel' => '/membership/members-with-allergies-or-dietary-restrictions.php?format=xls',
            ],
            'Medical Form Effective Dates' => [
                'Print (Export to PDF)' => '/membership/medical-form-effective-dates.php?format=pdf',
                'Open in Excel' => '/membership/medical-form-effective-dates.php?format=xls',
            ],
            'Family Cross Reference' => [
                'Print (Export to PDF)' => '/membership/family-cross-reference.php?format=pdf',
                'Open in Excel' => '/membership/family-cross-reference.php?format=xls',
            ],
            'Expired Training By Course' => [
                'Print (Export to PDF)' => '/membership/expired-training-by-course.php?format=pdf',
                'Open in Excel' => '/membership/expired-training-by-course.php?format=xls',
            ],
            'Expired Training By Person' => [
                'Print (Export to PDF)' => '/membership/expired-training-by-person.php?format=pdf',
                'Open in Excel' => '/membership/expired-training-by-person.php?format=xls',
            ],
            'Required Training By Course' => [
                'Print (Export to PDF)' => '/membership/required-training-by-course.php?format=pdf',
                'Open in Excel' => '/membership/required-training-by-course.php?format=xls',
            ],
            'Required Training By Person' => [
                'Print (Export to PDF)' => '/membership/required-training-by-person.php?format=pdf',
                'Open in Excel' => '/membership/required-training-by-person.php?format=xls',
            ],
            'Leaders Who Need YPT' => [
                'Print (Export to PDF)' => '/membership/leaders-who-need-ypt.php?format=pdf',
                'Open in Excel' => '/membership/leaders-who-need-ypt.php?format=xls',
            ],
            'Upcoming BSA Registration Renewals' => [
                'Print (Export to PDF)' => '/membership/upcoming-bsa-registration-renewals.php?format=pdf',
                'Open in Excel' => '/membership/upcoming-bsa-registration-renewals.php?format=xls',
            ],
            'BSA Registration' => [
                'Print (Export to PDF)' => '/membership/bsa-registration.php?format=pdf',
                'Open in Excel' => '/membership/bsa-registration.php?format=xls',
            ],
        ],
        'Dynamic Subgroups' => '/membership/dynamic-subgroups.php',
        'Leadership' => '/membership/leadership.php',
        'Training' => '/membership/training.php',
        'Upload Training From My.Scouting.Org' => '/membership/upload-training-from-my-scouting.php',
        'Advance Grade' => '/membership/advance-grade.php',
        'Upload Members' => [
            'Upload ScoutbookPlus Roster Report' => '/membership/upload-scoutbookplus-roster-report.php',
            'Upload Scouts From ScoutBook' => '/membership/upload-scouts-from-scoutbook.php',
            'Upload Adults From ScoutBook' => '/membership/upload-adults-from-scoutbook.php',
            'Upload Roster From My.Scouting' => '/membership/upload-roster-from-my-scouting.php',
        ],
        'Update All . . .' => [
            'BSA Registration' => '/membership/update-all-bsa-registration.php',
            'Medical Form Date' => '/membership/update-all-medical-form-date.php',
            'Allergies and Dietary Restrictions' => '/membership/update-all-allergies-and-dietary-restrictions.php',
        ],
        'Export Roster to Excel' => '/membership/export-roster-to-excel.php',
    ],
    'Cub Scouts' => [
        'Update Cub Scout Age Levels' => '/cub-scouts/update-age-levels.php',
        'Adventures & Badges' => '/cub-scouts/adventures-and-badges.php',
        'Special Awards' => '/cub-scouts/special-awards.php',
        'Scouting History' => '/cub-scouts/scouting-history.php',
        'Pending Awards' => '/cub-scouts/pending-awards.php',
        'Pending Awards Report' => [
            'Print (Export to PDF)' => '/cub-scouts/pending-awards-report.php?format=pdf',
            'Open in Excel' => '/cub-scouts/pending-awards-report.php?format=xls',
        ],
        'Pending Award Counts' => [
            'Print (Export to PDF)' => '/cub-scouts/pending-award-counts.php?format=pdf',
            'Open in Excel' => '/cub-scouts/pending-award-counts.php?format=xls',
        ],
        'Uncompleted Requirements Report' => '/cub-scouts/uncompleted-requirements-report.php',
        'Set Award Date' => '/cub-scouts/set-award-date.php',
        'Export to Scoutbook Plus' => '/cub-scouts/export-to-scoutbook-plus.php',
        'Upload ScoutBook Plus Advancement' => '/cub-scouts/upload-scoutbook-plus-advancement.php',
    ],
    'Resources' => [
        'Forms & Documents' => '/resources/forms-and-documents.php',
        'Web Links' => '/resources/web-links.php',
        'Add & Update Forms' => '/resources/add-update-forms.php',
        'Add & Update Form Categories' => '/resources/add-update-form-categories.php',
        'Add & Update Web Links' => '/resources/add-update-web-links.php',
    ],
    'Money' => [
        'Financial Hub' => '/money/financial-hub.php',
        'Individual Transactions' => '/money/individual-transactions.php',
        'Group Transactions' => '/money/group-transactions.php',
        'Payment Collector' => '/money/payment-collector.php',
        'Expense Reimbursement Requests' => '/money/expense-reimbursement-requests.php',
        'Financial Reports' => [
            'Report Account Balances' => [
                'Print (Export to PDF)' => '/money/report-account-balances.php?format=pdf',
                'Open in Excel' => '/money/report-account-balances.php?format=xls',
            ],
            'Report Financial History' => '/money/report-financial-history.php',
            'Fund Balances Report' => [
                'Print (Export to PDF)' => '/money/fund-balances-report.php?format=pdf',
                'Open in Excel' => '/money/fund-balances-report.php?format=xls',
            ],
            'Fund Balances By Fiscal Year' => [
                'Print (Export to PDF)' => '/money/fund-balances-by-fiscal-year.php?format=pdf',
                'Open in Excel' => '/money/fund-balances-by-fiscal-year.php?format=xls',
            ],
            'Fund Balances on Effective Date' => '/money/fund-balances-on-effective-date.php',
        ],
        'Email Account Balances' => '/money/email-account-balances.php',
        'Group Account Balances' => '/money/group-account-balances.php',
        'Member Account Balances' => '/money/member-account-balances.php',
        'Event Balances' => '/money/event-balances.php',
        'Statement Reconciliation' => '/money/reconciliation-statement.php',
        'On-Line Payment History' => '/money/online-payment-history.php',
        'Fiscal Years & Budgets' => '/money/fiscal-years-and-budgets.php',
        'Upload Account Balances From Spreadsheet' => '/money/upload-account-balances-from-spreadsheet.php',
        'Export All Transactions to Excel' => '/money/export-all-transactions-to-excel.php',
    ],
    'Site Configuration' => [
        'E-Mail Settings' => '/site-configuration/email-settings.php',
        'Membership Type' => '/site-configuration/membership-type.php',
        'Relationship Types' => '/site-configuration/relationship-types.php',
        'Dress Codes' => '/site-configuration/dress-codes.php',
        'Skills and Interests' => '/site-configuration/skills-and-interests.php',
        'Leadership Positions' => '/site-configuration/leadership-positions.php',
        'Training Courses' => '/site-configuration/training-courses.php',
        'Awards' => '/site-configuration/awards.php',
        'Event Types' => '/site-configuration/event-types.php',
        'Activity Types' => '/site-configuration/activity-types.php',
        'Transaction Types' => '/site-configuration/transaction-types.php',
        'Funds' => '/site-configuration/funds.php',
        'Fund Categories' => '/site-configuration/fund-categories.php',
        'Budget Template' => '/site-configuration/budget-template.php',
        'PayPal Configuration' => '/site-configuration/paypal-configuration.php',
        'Square Configuration' => '/site-configuration/square-configuration.php',
        'Payment Collector' => '/site-configuration/payment-collector.php',
        'Expense Reimbursements' => '/site-configuration/expense-reimbursements.php',
        'Security Configuration' => [
            'Disable Menu Items' => '/site-configuration/disable-menu-items.php',
            'Override Default Public Access Settings' => '/site-configuration/override-public-access-settings.php',
            'Configure Quick Menus' => '/site-configuration/configure-quick-menus.php',
            'Configure User Roles' => '/site-configuration/configure-user-roles.php',
            'Assign Tasks To Roles' => '/site-configuration/assign-tasks-to-roles.php',
            'Role Task Report' => [
                'Print (Export to PDF)' => '/site-configuration/role-task-report.php?format=pdf',
                'Open in Excel' => '/site-configuration/role-task-report.php?format=xls',
            ],
            'Task Role Report' => [
                'Print (Export to PDF)' => '/site-configuration/task-role-report.php?format=pdf',
                'Open in Excel' => '/site-configuration/task-role-report.php?format=xls',
            ],
        ],
        'Contact Us Reasons' => '/site-configuration/contact-us-reasons.php',
        'Site Appearance' => '/site-configuration/site-appearance.php',
    ],
    'Administration' => [
        'Users & Passwords' => '/administration/users-and-passwords.php',
        'User Roles' => '/administration/user-roles.php',
        'Send User IDs & Passwords' => '/administration/user-send-password.php',
        'Automatically Send New User IDs' => '/administration/admin-users-auto-send.php',
        'Display User Permissions' => '/administration/admin-user-permissions.php',
        'User Permissions Report' => [
            'Print (Export to PDF)' => '/administration/user-permissions-report.php?format=pdf',
            'Open in Excel' => '/administration/user-permissions-report.php?format=xls',
        ],
        'Menu Security Report' => [
            'Print (Export to PDF)' => '/administration/menu-security-report.php?format=pdf',
            'Open in Excel' => '/administration/menu-security-report.php?format=xls',
        ],
        'User Activity Report' => [
            'Print (Export to PDF)' => '/administration/user-activity-report.php?format=pdf',
            'Open in Excel' => '/administration/user-activity-report.php?format=xls',
        ],
        'Database Backup' => '/administration/database-backup.php',
        'Renew Subscription' => '/administration/renew-subscription.php',
        'TroopWebHost Administrative Contacts' => '/administration/admin-contacts.php',
    ],
];

if ($menuLoggedOut) {
    $menuSections = ['Home' => array_slice($menuSections['Home'], 0, 3, true)];
}

$menuId = 1;

function renderMenuItems(array $items, int $depth, int &$menuId): void
{
        foreach ($items as $label => $destination) {
                if (is_array($destination)) {
                        $menuId++;
                        $submenuId = 'm' . $menuId;
                        $submenuClass = 'navmenulower' . ($depth > 1 ? $depth : '');
                        ?>
        <li class="list-group-item"><a href="javascript:toggleLower('<?= $submenuId ?>');"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?> <span id="<?= $submenuId ?>-icon" class="fa fa-caret-right pull-right"></span></a></li>
        <div id="<?= $submenuId ?>" class="<?= $submenuClass ?>">
            <ul class="list-group">
<?php renderMenuItems($destination, $depth + 1, $menuId); ?>
            </ul>
        </div>
                        <?php
                        continue;
                }
                ?>
        <li class="list-group-item"><a href="<?= htmlspecialchars($destination, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></a></li>
                <?php
        }
}
?>
<div id="mainmenu" class="navmenu">
  <ul class="list-group">
<?php if ($menuLoggedOut): ?>
<?php renderMenuItems($menuSections['Home'], 1, $menuId); ?>
<?php else: ?>
<?php renderMenuItems($menuSections, 1, $menuId); ?>
<?php endif; ?>
  </ul>
</div>
