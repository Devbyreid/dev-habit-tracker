<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dev Habit Tracker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Dev Habit Tracker</h1>
    <p class="sub">Log your daily coding and track your streak.</p>

    <form id="habitForm">
      <label>
        What did you do today?
        <input type="text" id="note" placeholder="e.g., practiced arrays, built a form..." required />
      </label>

      <label>
        Language / Topic
        <select id="topic" required>
          <option value="">Choose one</option>
          <option>JavaScript</option>
          <option>PHP</option>
          <option>Python</option>
          <option>SQL</option>
          <option>HTML/CSS</option>
          <option>Networking</option>
          <option>Other</option>
        </select>
      </label>

      <button type="submit">Save Log</button>
    </form>

    <div class="card">
      <h2>Stats</h2>
      <p><strong>Current Streak:</strong> <span id="streak">0</span> days</p>
      <p><strong>Total Logs:</strong> <span id="total">0</span></p>
    </div>

    <div class="card">
      <h2>Logs</h2>
      <div id="logs"></div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
