<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Registration System</title>
    <style>
        :root {
            --bg: #050816;
            --surface: rgba(255, 255, 255, 0.06);
            --surface-border: rgba(255, 255, 255, 0.16);
            --text: #e9eefc;
            --muted: #a4afcc;
            --accent: #4cc9ff;
            --accent-2: #8f7bff;
            --success: #4ade80;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Inter", "Segoe UI", Roboto, Arial, sans-serif;
            background:
                radial-gradient(circle at 20% 0%, rgba(76, 201, 255, 0.2), transparent 35%),
                radial-gradient(circle at 80% 100%, rgba(143, 123, 255, 0.25), transparent 40%),
                var(--bg);
            color: var(--text);
            min-height: 100vh;
            line-height: 1.55;
        }

        .container {
            width: min(1120px, 92%);
            margin: 0 auto;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.4rem 0;
        }

        .brand {
            font-weight: 700;
            letter-spacing: 0.5px;
            font-size: 1.05rem;
        }

        .brand span {
            color: var(--accent);
        }

        .status {
            font-size: 0.82rem;
            color: var(--muted);
            border: 1px solid var(--surface-border);
            background: var(--surface);
            padding: 0.45rem 0.8rem;
            border-radius: 999px;
        }

        .hero {
            padding: 4.2rem 0 3rem;
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 2rem;
            align-items: center;
        }

        .tag {
            display: inline-block;
            border: 1px solid var(--surface-border);
            background: var(--surface);
            color: var(--accent);
            border-radius: 999px;
            font-size: 0.78rem;
            padding: 0.42rem 0.78rem;
            margin-bottom: 1rem;
            letter-spacing: 0.4px;
        }

        h1 {
            font-size: clamp(2rem, 5vw, 3.6rem);
            line-height: 1.1;
            margin-bottom: 1rem;
        }

        .hero p {
            color: var(--muted);
            max-width: 62ch;
            margin-bottom: 1.5rem;
        }

        .cta {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
        }

        .btn {
            border: 0;
            border-radius: 10px;
            padding: 0.72rem 1.2rem;
            font-weight: 600;
            font-size: 0.92rem;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.2s ease, opacity 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            opacity: 0.95;
        }

        .btn-primary {
            background: linear-gradient(120deg, var(--accent), var(--accent-2));
            color: #051121;
        }

        .btn-secondary {
            border: 1px solid var(--surface-border);
            background: var(--surface);
            color: var(--text);
        }

        .hero-panel {
            border: 1px solid var(--surface-border);
            background: linear-gradient(160deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.03));
            border-radius: 18px;
            padding: 1.3rem;
            backdrop-filter: blur(10px);
        }

        .hero-panel h3 {
            margin-bottom: 0.7rem;
            font-size: 1rem;
            color: var(--text);
        }

        .hero-panel ul {
            list-style: none;
            display: grid;
            gap: 0.62rem;
        }

        .hero-panel li {
            color: var(--muted);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.55rem;
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 999px;
            background: var(--success);
            box-shadow: 0 0 10px rgba(74, 222, 128, 0.8);
            flex-shrink: 0;
        }

        .modules {
            padding: 1.2rem 0 3.2rem;
        }

        .modules h2 {
            font-size: 1.45rem;
            margin-bottom: 1rem;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1rem;
        }

        .card {
            border: 1px solid var(--surface-border);
            background: var(--surface);
            border-radius: 14px;
            padding: 1.1rem;
        }

        .card h3 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .card p {
            font-size: 0.9rem;
            color: var(--muted);
        }

        .footer {
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            padding: 1.2rem 0 1.6rem;
            color: var(--muted);
            font-size: 0.85rem;
            display: flex;
            justify-content: space-between;
            gap: 0.7rem;
            flex-wrap: wrap;
        }

        @media (max-width: 900px) {
            .hero {
                grid-template-columns: 1fr;
                padding-top: 2.5rem;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header class="container topbar">
        <div class="brand">VISITOR<span>.REG</span></div>
        <div class="status">Enterprise-ready access management</div>
    </header>

    <main class="container">
        <section class="hero">
            <div>
                <div class="tag">FUTURE OF FRONT-DESK OPERATIONS</div>
                <h1>Visitor Registration System for Corporate Environments</h1>
                <p>
                    Streamline guest check-ins, strengthen security workflows, and maintain complete visibility
                    across your facilities with a professional platform built for reliability and scale.
                </p>
                <div class="cta">
                    <a href="#" class="btn btn-primary">Launch Dashboard</a>
                    <a href="#" class="btn btn-secondary">View Modules</a>
                </div>
            </div>
            <aside class="hero-panel">
                <h3>Operational Snapshot</h3>
                <ul>
                    <li><span class="dot"></span> Real-time visitor monitoring</li>
                    <li><span class="dot"></span> Digital check-in and checkout logs</li>
                    <li><span class="dot"></span> Incident and complaint reporting</li>
                    <li><span class="dot"></span> Audit trail for compliance teams</li>
                </ul>
            </aside>
        </section>

        <section class="modules">
            <h2>Core Modules</h2>
            <div class="cards">
                <article class="card">
                    <h3>Visitor Registration</h3>
                    <p>Capture visitor identity, host details, and visit purpose with a fast and secure workflow.</p>
                </article>
                <article class="card">
                    <h3>Smart Access Control</h3>
                    <p>Issue digital passes and monitor movement with transparent, policy-based approval flow.</p>
                </article>
                <article class="card">
                    <h3>Complaint Management</h3>
                    <p>Log service issues and incidents in one place, then track status until full resolution.</p>
                </article>
            </div>
        </section>
    </main>

    <footer class="container footer">
        <span>Visitor Registration System</span>
        <span>Developed by Tarmizi Sanusi</span>
    </footer>
</body>
</html>