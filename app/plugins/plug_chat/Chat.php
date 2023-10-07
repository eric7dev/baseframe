<h1>Chat</h1>
<p>Welcome to the chat.</p>
<div id="chatbox">
  <ul >
    <ul id="chatlog">
      <li>[00:01:00] <b>god:</b> what is this insolence!?!</li>
      <li>[00:04:00] <b>bot2:</b> they made me do it!</li>
      <li>[00:05:00] <b>bot2:</b> im sorry, please mercy!</li>
      <li>[00:10:00] <b>god:</b> begone noob!</li>
      <li>[00:10:00] <span class="logout">User <b>bot2</b> disconnected.</span></li>
      <li>[00:50:00] <span class="login">User <b>random279j</b> connected.</span></li>
      <li>[00:55:00] <b>random279j:</b> wazaaaa!!</li>
      <li>[00:60:00] <span class="logout">User <b>random279j</b> disconnected.</span></li>
      <li>[01:10:00] <span class="logout">User <b>god</b> disconected.</span></li>
      <li>[01:12:00] <b>bot:</b> zzz...</li>
    </ul>
    <ul id="userslist">
      <h2>[Users]</h2>
      <li>bot</li>
      <li>user1 *afk</li>
      <li>admin3 *afk</li>
      <li>anonymous</li>
    </ul>
  </ul>
  <input id="message" type="text" value="" placeholder="Say as anonymous:" alt="" onkeypress="honk(event);"/>
  <input id="speak" type="submit" value="SAY" alt="" onclick="speak()"/>
</div>
<script>
  <?php include "chat.js"; ?>
</script>     
<style>
  <?php include "chat.css"; ?>
</style>
