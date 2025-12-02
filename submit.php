<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Application Submitted — Sreelekha P</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root{
      --page-bg-1: #eaf6ff;
      --card-bg: #ffffff;
      --accent: #2ea6ff;
      --muted: #58708a;
      --text: #0f2130;
      --border: rgba(46,166,255,0.12);
    }
    body{font-family:'Poppins',sans-serif;background:var(--page-bg-1);color:var(--text);padding:28px;display:flex;align-items:center;justify-content:center;min-height:100vh}
    .card{max-width:900px;width:100%;background:var(--card-bg);border-radius:14px;padding:26px;border:1px solid var(--border);box-shadow:0 16px 50px rgba(29,88,140,0.06)}
    .head{display:flex;justify-content:space-between;align-items:center;gap:12px}
    h1{margin:0;font-size:20px}
    .sub{color:var(--muted);font-size:13px}
    .grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:18px}
    .box{background:#f8fbff;padding:14px;border-radius:10px;border:1px solid rgba(46,166,255,0.06)}
    .label{font-size:12px;color:var(--muted);margin-bottom:6px}
    .val{font-size:15px;color:var(--text)}
    .full{grid-column:1/-1}
    .actions{display:flex;justify-content:flex-end;gap:10px;margin-top:18px}
    .btn{background:linear-gradient(90deg,var(--accent),#63c2ff);padding:10px 14px;border-radius:10px;color:white;text-decoration:none;font-weight:600}
    .btn.secondary{background:transparent;border:1px solid rgba(20,60,90,0.06);color:var(--muted)}
    @media(max-width:720px){ .grid{grid-template-columns:1fr} .actions{justify-content:center} }
  </style>
</head>
<body>
  <div class="card" role="region" aria-labelledby="title">
    <div class="head">
      <div>
        <h1 id="title">Application received — Sreelekha P</h1>
        <div class="sub">Thank you. Below is a summary of the information you submitted. You can print this page (Ctrl+P) or go back to edit.</div>
      </div>
      <div style="text-align:right">
        <div style="font-size:13px;color:var(--muted)">Submitted on</div>
        <div style="font-weight:600">02 Dec 2025, 15:45</div>
      </div>
    </div>

    <div class="grid" role="table" aria-label="Submission summary">
      <div class="box">
        <div class="label">Full name</div>
        <div class="val">Sreelekha P</div>
      </div>

      <div class="box">
        <div class="label">Email</div>
        <div class="val">putturusreelekha@gmail.com</div>
      </div>

      <div class="box">
        <div class="label">Phone</div>
        <div class="val">7975015785</div>
      </div>

      <div class="box">
        <div class="label">Date of birth</div>
        <div class="val">—</div>
      </div>

      <div class="box">
        <div class="label">Gender</div>
        <div class="val">—</div>
      </div>

      <div class="box">
        <div class="label">Qualification</div>
        <div class="val">B.E.</div>
      </div>

      <div class="box full">
        <div class="label">Address</div>
        <div class="val" style="white-space:pre-line">Bangalore</div>
      </div>

      <div class="box">
        <div class="label">Applying for</div>
        <div class="val">CSE</div>
      </div>

      <div class="box">
        <div class="label">Skills / Interests</div>
        <div class="val">Python</div>
      </div>
    </div>

    <div class="actions">
      <a class="btn secondary" href="index.html">Back to form</a>
      <a class="btn" href="javascript:window.print()">Print summary</a>
    </div>
  </div>
</body>
</html>
