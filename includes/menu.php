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
    ],
    'Administration' => [
        'Users & Passwords' => '/administration/users-and-passwords.php',
        'User Roles' => '/administration/user-roles.php',
        'Send User IDs & Passwords' => '/administration/user-send-password.php',
        'Automatically Send New User IDs' => '/administration/admin-users-auto-send.php',
        'Display User Permissions' => '/administration/admin-user-permissions.php',
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
