$(document).ready(function() {

  const EchoInst = new Echo({
    forceTLS: false,
    broadcaster: "pusher",
    key: "hari",
    cluster: "mt1",
    wsPort: 6001,
    wsHost: window.location.hostname,
  })
  

  $("#connect").click(function() {
    const project = $("#project").val();
    const deviceId = $("#device").val();
    $("#title").text("Connected to " + project + " Device #" + deviceId)
    EchoInst.channel(project).listen('PriorityVideo', ({payload}) => {
      if (payload.device == deviceId) {
        const div = $("<div/>").append("Playing - " + payload.url)
        div.appendTo($("#content"));
        setTimeout(() => div.remove(), 2000);
      }
    })
    $("#actions").hide();
  });


})
