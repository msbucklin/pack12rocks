<?php
$sectionDirectories = [
  'Home' => 'home',
  'My Stuff' => 'my-stuff',
  'Events' => 'events',
  'Membership' => 'membership',
  'Cub Scouts' => 'cub-scouts',
  'Resources' => 'resources',
  'Money' => 'money',
  'Site Configuration' => 'site-configuration',
  'Administration' => 'administration',
];

$labelOverrides = [
  'home/home-loggedout.php' => 'Home, Logged Out',
  'home/home-parent.php' => 'Parent Home',
  'home/my-info.php' => 'My Information',
  'home/uniform.php' => 'Uniforms',
  'my-stuff/my-info.php' => 'My Information',
  'style-guide.php' => 'Interface Style Guide',
];

function pageLabel(string $path, array $overrides): string
{
  if (isset($overrides[$path])) {
    return $overrides[$path];
  }

  $name = pathinfo($path, PATHINFO_FILENAME);
  $label = ucwords(str_replace(['-', '_'], ' ', $name));

  return str_replace(
    ['Bsa', 'Email', 'Id', 'Pdf', 'Scoutbookplus', 'Ypt'],
    ['BSA', 'E-Mail', 'ID', 'PDF', 'Scoutbook Plus', 'YPT'],
    $label
  );
}

function pagesInDirectory(string $directory): array
{
  $pages = [];
  $absoluteDirectory = __DIR__ . '/' . $directory;

  if (!is_dir($absoluteDirectory)) {
    return $pages;
  }

  $files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($absoluteDirectory, FilesystemIterator::SKIP_DOTS)
  );

  foreach ($files as $file) {
    if ($file->isFile() && strtolower($file->getExtension()) === 'php') {
      $pages[] = str_replace(DIRECTORY_SEPARATOR, '/', substr($file->getPathname(), strlen(__DIR__) + 1));
    }
  }

  natcasesort($pages);

  return array_values($pages);
}

$pageSections = [];
foreach ($sectionDirectories as $section => $directory) {
  $pages = pagesInDirectory($directory);
  if ($pages !== []) {
    $pageSections[$section] = $pages;
  }
}

$rootPages = ['email-confirmation.php', 'style-guide.php'];
foreach ($rootPages as $rootPage) {
  if (is_file(__DIR__ . '/' . $rootPage)) {
    $section = $rootPage === 'style-guide.php' ? 'Reference' : 'Other';
    $pageSections[$section][] = $rootPage;
  }
}
?>
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
      <p class="subtitle">A quick launch point for the PHP pages in this project.</p>
    </div>
  </header>

  <main>
<?php foreach ($pageSections as $section => $pages): ?>
<?php $sectionId = strtolower(str_replace(' ', '-', $section)) . '-pages'; ?>
    <section aria-labelledby="<?= htmlspecialchars($sectionId, ENT_QUOTES, 'UTF-8') ?>">
      <div class="section-heading">
        <h2 id="<?= htmlspecialchars($sectionId, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($section, ENT_QUOTES, 'UTF-8') ?></h2>
        <span class="count"><?= count($pages) ?> <?= count($pages) === 1 ? 'page' : 'pages' ?></span>
      </div>
      <div class="page-grid">
<?php foreach ($pages as $page): ?>
        <a class="page-link" href="/<?= htmlspecialchars($page, ENT_QUOTES, 'UTF-8') ?>"><span class="page-name"><?= htmlspecialchars(pageLabel($page, $labelOverrides), ENT_QUOTES, 'UTF-8') ?></span><span class="page-file"><?= htmlspecialchars($page, ENT_QUOTES, 'UTF-8') ?></span></a>
<?php endforeach; ?>
      </div>
    </section>
<?php endforeach; ?>
  </main>

  <footer>Pack 12 Rocks PHP project hub</footer>
</body>
</html>
