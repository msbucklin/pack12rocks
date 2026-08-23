<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pack 12 Austin | Project Pages</title>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800">
  <style>
    :root {
      --navy: #0b3b76;
      --navy-dark: #072b55;
      --blue: #1e5d9f;
      --gold: #d8a42a;
      --gold-light: #f6d36d;
      --ink: #173a63;
      --muted: #567092;
      --line: rgba(13, 59, 114, 0.14);
      --surface: rgba(255, 255, 255, 0.92);
    }

    * {
      box-sizing: border-box;
    }

    body {
      min-width: 320px;
      margin: 0;
      color: var(--ink);
      background:
        linear-gradient(135deg, rgba(216, 164, 42, 0.10), transparent 34%),
        linear-gradient(315deg, rgba(30, 93, 159, 0.12), transparent 42%),
        #f5f8fb;
      font-family: Montserrat, sans-serif;
    }

    header {
      padding: 42px 24px 38px;
      color: #fff;
      background: linear-gradient(135deg, var(--navy-dark), var(--navy) 64%, var(--blue));
      border-bottom: 4px solid var(--gold);
      box-shadow: 0 8px 24px rgba(7, 43, 85, 0.18);
    }

    .header-inner,
    main {
      width: min(1160px, calc(100% - 40px));
      margin: 0 auto;
    }

    .eyebrow {
      margin: 0 0 8px;
      color: var(--gold-light);
      font-size: 12px;
      font-weight: 800;
      letter-spacing: 0.14em;
      text-transform: uppercase;
    }

    h1 {
      margin: 0;
      font-size: clamp(28px, 5vw, 48px);
      line-height: 1.05;
      letter-spacing: 0;
    }

    .subtitle {
      max-width: 620px;
      margin: 14px 0 0;
      color: rgba(255, 255, 255, 0.82);
      font-size: 15px;
      line-height: 1.6;
    }

    main {
      padding: 34px 0 56px;
    }

    .section-heading {
      display: flex;
      align-items: baseline;
      justify-content: space-between;
      gap: 16px;
      margin: 0 0 14px;
    }

    h2 {
      margin: 0;
      color: var(--navy);
      font-size: 20px;
      line-height: 1.2;
    }

    .count {
      color: var(--muted);
      font-size: 12px;
      font-weight: 700;
    }

    .page-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 14px;
      margin-bottom: 32px;
    }

    .page-link {
      display: flex;
      min-height: 96px;
      flex-direction: column;
      justify-content: space-between;
      padding: 18px;
      color: var(--ink);
      text-decoration: none;
      background: var(--surface);
      border: 1px solid var(--line);
      border-left: 4px solid var(--gold);
      box-shadow: 0 8px 20px rgba(12, 32, 56, 0.07);
      transition: transform 0.16s ease, border-color 0.16s ease, box-shadow 0.16s ease;
    }

    .page-link:hover,
    .page-link:focus-visible {
      color: var(--navy);
      border-color: var(--blue);
      box-shadow: 0 12px 24px rgba(12, 32, 56, 0.13);
      outline: none;
      transform: translateY(-2px);
    }

    .page-name {
      font-size: 15px;
      font-weight: 800;
      line-height: 1.35;
    }

    .page-file {
      margin-top: 12px;
      color: var(--muted);
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.03em;
    }

    footer {
      width: min(1160px, calc(100% - 40px));
      margin: 0 auto;
      padding: 0 0 28px;
      color: var(--muted);
      font-size: 11px;
      font-weight: 600;
    }

    @media (max-width: 800px) {
      .page-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }
    }

    @media (max-width: 520px) {
      header {
        padding: 32px 20px 30px;
      }

      .header-inner,
      main,
      footer {
        width: min(100% - 28px, 1160px);
      }

      main {
        padding-top: 26px;
      }

      .page-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="header-inner">
      <p class="eyebrow">Pack 12 Austin</p>
      <h1>Project Pages</h1>
      <p class="subtitle">A quick launch point for the HTML pages in this project.</p>
    </div>
  </header>

  <main>
    <section aria-labelledby="home-pages">
      <div class="section-heading">
        <h2 id="home-pages">Home</h2>
        <span class="count">16 pages</span>
      </div>
      <div class="page-grid">
        <a class="page-link" href="/home/home.php"><span class="page-name">Home</span><span class="page-file">home/home.php</span></a>
        <a class="page-link" href="/home/home-loggedout.php"><span class="page-name">Home, Logged Out</span><span class="page-file">home/home-loggedout.php</span></a>
        <a class="page-link" href="/home/home-parent.php"><span class="page-name">Parent Home</span><span class="page-file">home/home-parent.php</span></a>
        <a class="page-link" href="/home/home2.php"><span class="page-name">Home 2</span><span class="page-file">home/home2.php</span></a>
        <a class="page-link" href="/home/about-us.php"><span class="page-name">About Us</span><span class="page-file">home/about-us.php</span></a>
        <a class="page-link" href="/home/add-update-announcements.php"><span class="page-name">Add &amp; Update Announcements</span><span class="page-file">home/add-update-announcements.php</span></a>
        <a class="page-link" href="/home/camping.php"><span class="page-name">Camping</span><span class="page-file">home/camping.php</span></a>
        <a class="page-link" href="/home/den-leader-resources.php"><span class="page-name">Den Leader Resources</span><span class="page-file">home/den-leader-resources.php</span></a>
        <a class="page-link" href="/home/fundraising.php"><span class="page-name">Fundraising</span><span class="page-file">home/fundraising.php</span></a>
        <a class="page-link" href="/home/how-to-make-payments.php"><span class="page-name">How to Make Payments</span><span class="page-file">home/how-to-make-payments.php</span></a>
        <a class="page-link" href="/home/manage-custom-pages.php"><span class="page-name">Manage Custom Pages</span><span class="page-file">home/manage-custom-pages.php</span></a>
        <a class="page-link" href="/home/organization-chart.php"><span class="page-name">Organization Chart</span><span class="page-file">home/organization-chart.php</span></a>
        <a class="page-link" href="/home/renewing-your-membership.php"><span class="page-name">Renewing Your Membership</span><span class="page-file">home/renewing-your-membership.php</span></a>
        <a class="page-link" href="/home/uniform.php"><span class="page-name">Uniforms</span><span class="page-file">home/uniform.php</span></a>
        <a class="page-link" href="/home/view-contacts.php"><span class="page-name">View Contacts</span><span class="page-file">home/view-contacts.php</span></a>
        <a class="page-link" href="/home/volunteering.php"><span class="page-name">Volunteering</span><span class="page-file">home/volunteering.php</span></a>
      </div>
    </section>

    <section aria-labelledby="event-pages">
      <div class="section-heading">
        <h2 id="event-pages">Events</h2>
        <span class="count">6 pages</span>
      </div>
      <div class="page-grid">
        <a class="page-link" href="/events/events-hub.php"><span class="page-name">Events Hub</span><span class="page-file">events/events-hub.php</span></a>
        <a class="page-link" href="/events/calendar.php"><span class="page-name">Calendar</span><span class="page-file">events/calendar.php</span></a>
        <a class="page-link" href="/events/upcoming-events.php"><span class="page-name">Upcoming Events</span><span class="page-file">events/upcoming-events.php</span></a>
        <a class="page-link" href="/events/event.php"><span class="page-name">Event</span><span class="page-file">events/event.php</span></a>
        <a class="page-link" href="/events/event-parent.php"><span class="page-name">Parent Event</span><span class="page-file">events/event-parent.php</span></a>
        <a class="page-link" href="/events/event-attendance.php"><span class="page-name">Event Attendance</span><span class="page-file">events/event-attendance.php</span></a>
      </div>
    </section>

    <section aria-labelledby="my-stuff-pages">
      <div class="section-heading">
        <h2 id="my-stuff-pages">My Stuff</h2>
        <span class="count">2 pages</span>
      </div>
      <div class="page-grid">
        <a class="page-link" href="/my-stuff/my-info.php"><span class="page-name">My Information</span><span class="page-file">my-stuff/my-info.php</span></a>
        <a class="page-link" href="/my-stuff/change-password.php"><span class="page-name">Change Password</span><span class="page-file">my-stuff/change-password.php</span></a>
      </div>
    </section>

    <section aria-labelledby="membership-pages">
      <div class="section-heading">
        <h2 id="membership-pages">Membership</h2>
        <span class="count">2 pages</span>
      </div>
      <div class="page-grid">
        <a class="page-link" href="/membership/membership-hub.php"><span class="page-name">Membership Hub</span><span class="page-file">membership/membership-hub.php</span></a>
        <a class="page-link" href="/membership/member.php"><span class="page-name">Member</span><span class="page-file">membership/member.php</span></a>
      </div>
    </section>

    <section aria-labelledby="administration-pages">
      <div class="section-heading">
        <h2 id="administration-pages">Administration</h2>
        <span class="count">9 pages</span>
      </div>
      <div class="page-grid">
        <a class="page-link" href="/administration/users-and-passwords.php"><span class="page-name">Users and Passwords</span><span class="page-file">administration/users-and-passwords.php</span></a>
        <a class="page-link" href="/administration/user.php"><span class="page-name">User</span><span class="page-file">administration/user.php</span></a>
        <a class="page-link" href="/administration/user-roles.php"><span class="page-name">User Roles</span><span class="page-file">administration/user-roles.php</span></a>
        <a class="page-link" href="/administration/user-role-edit.php"><span class="page-name">User Role Edit</span><span class="page-file">administration/user-role-edit.php</span></a>
        <a class="page-link" href="/administration/user-send-password.php"><span class="page-name">User Send Password</span><span class="page-file">administration/user-send-password.php</span></a>
        <a class="page-link" href="/administration/user-access-log.php"><span class="page-name">User Access Log</span><span class="page-file">administration/user-access-log.php</span></a>
        <a class="page-link" href="/administration/admin-contacts.php"><span class="page-name">Admin Contacts</span><span class="page-file">administration/admin-contacts.php</span></a>
        <a class="page-link" href="/administration/admin-user-permissions.php"><span class="page-name">Admin User Permissions</span><span class="page-file">administration/admin-user-permissions.php</span></a>
        <a class="page-link" href="/administration/admin-users-auto-send.php"><span class="page-name">Admin Users Auto-Send</span><span class="page-file">administration/admin-users-auto-send.php</span></a>
      </div>
    </section>

    <section aria-labelledby="reference-pages">
      <div class="section-heading">
        <h2 id="reference-pages">Reference</h2>
        <span class="count">1 page</span>
      </div>
      <div class="page-grid">
        <a class="page-link" href="/style-guide.php"><span class="page-name">Interface Style Guide</span><span class="page-file">style-guide.php</span></a>
      </div>
    </section>
  </main>

  <footer>Pack 12 Rocks PHP project hub</footer>
</body>
</html>
