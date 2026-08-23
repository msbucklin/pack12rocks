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
