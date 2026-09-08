<?php
$name = "Aniruddho Roy";
$role = "Computer Science & Engineering Student";
$university = "Hajee Mohammad Danesh Science and Technology University";

$skills = [
    "C/C++", "Python", "JavaScript", "TypeScript",
    "React", "Next.js", "Node.js", "Express.js",
    "PostgreSQL", "MongoDB", "Prisma",
    "Docker", "Git", "Linux"
];

$interests = [
    "Artificial Intelligence",
    "Machine Learning",
    "Cybersecurity",
    "Backend Development",
    "Networking",
    "Research"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($name) ?> | Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont,
                         "Segoe UI", sans-serif;
            background: #080b12;
            color: #f5f7fb;
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        /* NAVBAR */

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
            background: rgba(8, 11, 18, 0.75);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .nav-container {
            max-width: 1100px;
            margin: auto;
            padding: 18px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 22px;
            font-weight: 800;
        }

        .logo span {
            color: #7c8cff;
        }

        .nav-links {
            display: flex;
            gap: 28px;
            font-size: 14px;
            color: #aeb5c5;
        }

        .nav-links a:hover {
            color: white;
        }

        /* HERO */

        .hero {
            min-height: 100vh;
            max-width: 1100px;
            margin: auto;
            padding: 150px 25px 80px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
        }

        .hero-text {
            max-width: 650px;
        }

        .badge {
            display: inline-block;
            padding: 7px 14px;
            border-radius: 30px;
            background: rgba(124, 140, 255, 0.1);
            border: 1px solid rgba(124, 140, 255, 0.25);
            color: #9da8ff;
            font-size: 13px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: clamp(45px, 7vw, 78px);
            line-height: 1;
            letter-spacing: -4px;
            margin-bottom: 22px;
        }

        h1 span {
            color: #8995ff;
        }

        .hero p {
            color: #9ba3b5;
            font-size: 18px;
            max-width: 600px;
            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 20px;
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,0.12);
            transition: 0.2s;
            font-size: 14px;
        }

        .btn-primary {
            background: #7c8cff;
            color: white;
            border-color: #7c8cff;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        /* PROFILE CARD */

        .profile-card {
            width: 300px;
            min-width: 300px;
            padding: 30px;
            border-radius: 25px;

            background: linear-gradient(
                145deg,
                rgba(255,255,255,0.08),
                rgba(255,255,255,0.025)
            );

            border: 1px solid rgba(255,255,255,0.1);
            box-shadow: 0 25px 80px rgba(0,0,0,0.35);
        }

        .avatar {
            width: 110px;
            height: 110px;
            margin-bottom: 25px;

            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 36px;
            font-weight: 800;

            background: linear-gradient(135deg, #7c8cff, #a56cff);
        }

        .profile-card h2 {
            margin-bottom: 5px;
        }

        .profile-card p {
            color: #929aaa;
            font-size: 14px;
        }

        .location {
            margin-top: 20px;
            color: #aeb5c5;
            font-size: 14px;
        }

        /* SECTIONS */

        section {
            max-width: 1100px;
            margin: auto;
            padding: 100px 25px;
        }

        .section-title {
            margin-bottom: 45px;
        }

        .section-title small {
            color: #8995ff;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 12px;
        }

        .section-title h2 {
            font-size: 40px;
            margin-top: 8px;
        }

        /* ABOUT */

        .about-grid {
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 25px;
        }

        .card {
            padding: 30px;
            border-radius: 18px;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
        }

        .card p {
            color: #a6adbd;
        }

        /* SKILLS */

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill {
            padding: 9px 14px;
            border-radius: 8px;
            background: rgba(124,140,255,0.08);
            border: 1px solid rgba(124,140,255,0.18);
            color: #b7bfff;
            font-size: 13px;
        }

        /* PROJECTS */

        .projects {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .project {
            min-height: 220px;
        }

        .project-number {
            color: #8995ff;
            font-size: 13px;
        }

        .project h3 {
            margin: 15px 0 10px;
        }

        .project p {
            font-size: 14px;
        }

        /* INTERESTS */

        .interest-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .interest {
            padding: 22px;
            border-radius: 15px;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.07);
            color: #c1c6d2;
        }

        /* FOOTER */

        footer {
            text-align: center;
            padding: 50px 20px;
            border-top: 1px solid rgba(255,255,255,0.07);
            color: #777f91;
            font-size: 13px;
        }

        /* MOBILE */

        @media(max-width: 800px) {

            .nav-links {
                display: none;
            }

            .hero {
                flex-direction: column;
                align-items: flex-start;
            }

            .profile-card {
                width: 100%;
            }

            .about-grid,
            .projects,
            .interest-list {
                grid-template-columns: 1fr;
            }

            h1 {
                letter-spacing: -2px;
            }
        }
    </style>
</head>

<body>

<!-- NAVIGATION -->

<nav>
    <div class="nav-container">

        <div class="logo">
            AR<span>.</span>
        </div>

        <div class="nav-links">
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#interests">Interests</a>
        </div>

    </div>
</nav>


<!-- HERO -->

<header class="hero">

    <div class="hero-text">

        <div class="badge">
            Available for learning & research
        </div>

        <h1>
            Hi, I'm <span>Aniruddho.</span>
        </h1>

        <p>
            <?= htmlspecialchars($role) ?> interested in building
            software, exploring artificial intelligence, cybersecurity,
            networking and modern web technologies.
        </p>

        <div class="buttons">
            <a href="#projects" class="btn btn-primary">
                View Projects
            </a>

            <a href="#about" class="btn">
                About Me
            </a>
        </div>

    </div>


    <div class="profile-card">

        <div class="avatar">
            AR
        </div>

        <h2><?= htmlspecialchars($name) ?></h2>

        <p><?= htmlspecialchars($role) ?></p>

        <div class="location">
            🎓 <?= htmlspecialchars($university) ?>
        </div>

    </div>

</header>


<!-- ABOUT -->

<section id="about">

    <div class="section-title">
        <small>01 — About</small>
        <h2>Who I am</h2>
    </div>

    <div class="about-grid">

        <div class="card">

            <p>
                I am a Computer Science & Engineering student with a
                strong interest in software development and computer
                science research.
            </p>

            <br>

            <p>
                I enjoy working with backend systems, databases,
                artificial intelligence, networking and cybersecurity.
                I also like experimenting with Linux and self-hosted
                systems.
            </p>

        </div>


        <div class="card">

            <h3>Current Focus</h3>

            <br>

            <p>
                Building practical projects while developing a deeper
                understanding of machine learning, cybersecurity,
                networking and system design.
            </p>

        </div>

    </div>

</section>


<!-- SKILLS -->

<section id="skills">

    <div class="section-title">
        <small>02 — Skills</small>
        <h2>Technologies I use</h2>
    </div>

    <div class="skills">

        <?php foreach ($skills as $skill): ?>

            <div class="skill">
                <?= htmlspecialchars($skill) ?>
            </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- PROJECTS -->

<section id="projects">

    <div class="section-title">
        <small>03 — Projects</small>
        <h2>Things I'm building</h2>
    </div>

    <div class="projects">

        <div class="card project">

            <div class="project-number">01</div>

            <h3>AI Assistant</h3>

            <p>
                Exploring a privacy-focused assistant capable of
                working locally and managing personal tasks.
            </p>

        </div>


        <div class="card project">

            <div class="project-number">02</div>

            <h3>AI / ML Projects</h3>

            <p>
                Learning deep learning and experimenting with
                classification and natural language processing.
            </p>

        </div>


        <div class="card project">

            <div class="project-number">03</div>

            <h3>Self-Hosted Systems</h3>

            <p>
                Exploring Linux servers, storage, networking,
                remote access and self-hosted applications.
            </p>

        </div>

    </div>

</section>


<!-- INTERESTS -->

<section id="interests">

    <div class="section-title">
        <small>04 — Interests</small>
        <h2>What I enjoy exploring</h2>
    </div>

    <div class="interest-list">

        <?php foreach ($interests as $interest): ?>

            <div class="interest">
                <?= htmlspecialchars($interest) ?>
            </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- FOOTER -->

<footer>

    © <?= date("Y") ?> <?= htmlspecialchars($name) ?>

    <br>

    Built with PHP · HTML · CSS

</footer>

</body>
</html>
