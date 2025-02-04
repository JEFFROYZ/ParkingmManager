<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Manager</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="parking.css" />
    <script src="parking.js"></script>
</head>
<body onload="setupparkingmanager()">
    <div class="navbar">
        <div class="brand">PARKING MANAGER v 1.0</div>
    </div>
    <div class="dashboard">
        <div class="parking-manager">
            <div class="new-car-btn">Slot Management</div>
            <div class="new-car-entry">
                <div onclick="handleSlotClick(0)" id="slot1">1</div>
                <div onclick="handleSlotClick(1)" id="slot2">2</div>
                <div onclick="handleSlotClick(2)" id="slot3">3</div>
                <div onclick="handleSlotClick(3)" id="slot4">4</div>
                <div onclick="handleSlotClick(4)" id="slot5">5</div>
                <div onclick="handleSlotClick(5)" id="slot6">6</div>
                <div onclick="handleSlotClick(6)" id="slot7">7</div>
                <div onclick="handleSlotClick(7)" id="slot8">8</div>
                <div onclick="handleSlotClick(8)" id="slot9">9</div>
                <div onclick="handleSlotClick(9)" id="slot10">10</div>
            </div>
            <div class="new-car-btn">Manage Queue</div>
            <div class="queue">
                <img id="queue1" src="images.jpg"></img>
                <img id="queue2" src="images.jpg"></img>
                <img id="queue3" src="images.jpg"></img>
                <img id="queue4" src="images.jpg"></img>
                <img id="queue5" src="images.jpg"></img>
            </div>
            <div class="addtoqueue" onclick="handleSlotClick(-1)">Add to Queue</div>
        </div>
        <div class="parking-container" id="parkingspace">
            <div class="parking-slots-holder">
                <div class="parking-slot" id="slot-1">1</div>
                <div class="parking-slot" id="slot-2">2</div>
                <div class="parking-slot" id="slot-3">3</div>
                <div class="parking-slot" id="slot-4">4</div>
                <div class="parking-slot" id="slot-5">5</div>
            </div>
            <div class="parking-way" id="entry-way"></div>
            <div class="parking-way"></div>
            <div class="parking-slots-holder">
                <div class="parking-slot" id="slot-6">6</div>
                <div class="parking-slot" id="slot-7">7</div>
                <div class="parking-slot" id="slot-8">8</div>
                <div class="parking-slot" id="slot-9">9</div>
                <div class="parking-slot" id="slot-10">10</div>
            </div>
        </div>
        <div class="outside">Entry / Exit</div>
    </div>

    <!-- Form Pop-up -->
    <div id="formPopup" class="form-popup">
        <form id="carForm" class="form-container" onsubmit="return submitForm()">
            <h2>Enter Vehicle Information</h2>
            <label for="driverName"><b>Driver Name:</b></label>
            <input type="text" placeholder="Enter Driver Name" id="driverName" required>
    
            <label for="carNumber"><b>Car Number:</b></label>
            <input type="text" placeholder="Enter Car Number" id="carNumber" required>
    
            <label for="vehicleType"><b>Vehicle Type:</b></label>
            <select id="vehicleType" required>
                <option value="Bike">Bike</option>
                <option value="Car">Car</option>
            </select>
    
            <button type="submit" class="btn">Enter</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
        </form>
    </div>
    
</body>
</html>
