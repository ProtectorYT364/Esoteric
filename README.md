# ![idk](https://media.discordapp.net/attachments/727159224320131133/826094659000205322/Esoteric_11A13E3.gif?width=50&height=50) Esoteric
Esoteric is another anti-cheat made for PocketMine-MP. Compared to Mockingbird, this has more checks
I'm deciding to not disclose to the public.

## Supported Versions
The versions this anti-cheat currently supports are 1.16.100, 1.16.201, and 1.16.210

**Protocol List:**
- 419
- 422
- 428

## Planned Features
- [ ] Banwaves - for the memes.
- [ ] Discord webhook alerts.
- [ ] Commands to edit alert delay, turn on/off alerts, and get player logs.
- [ ] Create a functional exempt list for each detection.

## Detections
These are a list of the current detections Esoteric has, along with descriptions of those checks.

* **Fly**
    - A: Estimates the next Y movement of the player. This check detects basic flies.
    - B: Checks if the current Y movement of the player is near equal to the  Y movement of the player.
    - C: Checks if the user is jumping on the air.
* **Motion**
    - A: Checks for impossible upward motion. If there is no probable way you are able to go up, this check flags.
    Moreover, this also flags HighJump at a certain threshold.
    - B: Checks if the player is following Minecraft's friction rules in the air. This check can flag Bhop, and
    some flies.
    - C: Checks if the player is following Minecraft's friction rules while on the ground. This check is surprisingly very effective
    and can detect a variety of speeds on the ground. The idea behind this check is that your current speed multiplied by your friction
    cannot be greater than your previous speed.
* **GroundSpoof**
    - A: This checks if the player says that they're on the ground while not having any solid blocks around them.
  