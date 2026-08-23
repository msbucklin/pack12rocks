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
    ],
    'Events' => [
        'Events Hub' => '/events/events-hub.php',
        'Calendar' => '/events/calendar.php',
        'Add & Update Events' => '/events/upcoming-events.php',
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
?>
<div id="mainmenu" class="navmenu">
  <ul class="list-group">
<?php foreach ($menuSections as $section => $links): ?>
<?php if ($menuLoggedOut): ?>
<?php foreach ($links as $label => $url): ?>
    <li class="list-group-item"><a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></a></li>
<?php endforeach; ?>
<?php else: ?>
<?php $menuId = 'menu-' . strtolower(str_replace(' ', '-', $section)); ?>
    <li class="list-group-item"><a href="javascript:toggleLower('<?= $menuId ?>');"><?= htmlspecialchars($section, ENT_QUOTES, 'UTF-8') ?> <span id="<?= $menuId ?>-icon" class="fa fa-caret-right pull-right"></span></a></li>
    <div id="<?= $menuId ?>" class="navmenulower">
      <ul class="list-group">
<?php foreach ($links as $label => $url): ?>
        <li class="list-group-item"><a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></a></li>
<?php endforeach; ?>
      </ul>
    </div>
<?php endif; ?>
<?php endforeach; ?>
  </ul>
</div>
