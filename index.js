var ttn = require("ttn")
var appID = "hardware1234"
var accessKey = "ttn-account-v2.4QiUVWd-AS9c659IB6mk2RLwOe7NlrHpmNVZgcHfx5E"
var getal = "123456"
console.log("test")


ttn.data(appID, accessKey)

  .then(function (client) {
    client.on("uplink", function (devID, payload) {
      console.log("Received uplink from ", devID)
      console.log(payload)
    })
	// 1 is de port
  // true geeft bevestiging van binnenkomst door
  // replace staat voor de informatie die je nog moet hebben
  // je hebt replace, first of last
  // first - voorraan, last achteraan in de lijst.
	client.send( "koffiedame" , getal , 1, true, "replace")
  })
  .catch(function (error) {
    console.error("Error", error)
    process.exit(1)
  })

