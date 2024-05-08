<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date Range Picker with Radio Buttons</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <style>
    .ui-datepicker {
      font-size: 0.8em;
    }
  </style>
</head>
<body>

<form>
    <div class="tour-date-wrap mb-50">
        <h6>Select Your Booking Date:</h6>
        <div class="form-check mb-25">
            <input class="form-check-input" type="radio" name="tourDate" id="checkIn" value="predefinedDates" checked>
            <label class="form-check-label" for="checkIn">
                Use Predefined Dates
            </label>
        </div>
        <div class="form-check customdate">
            <input class="form-check-input" type="radio" name="tourDate" id="customDate" value="customDates">
            <label class="form-check-label" for="customDate">
                Select Custom Dates
            </label>
            <span class="form-group">
                <input type="text" id="daterange" name="daterange" placeholder="Select Dates">
            </span>
        </div>
    </div>
    <div class="total-price"><span>Total Price:</span> $470</div>
    <button type="button" id="calculateDays" class="primary-btn1 two">Calculate Days</button>
</form>

<div id="result" style="display: none;">
  <h4>Selected Dates:</h4>
  <p id="selectedDates"></p>
  <h4>Number of Days:</h4>
  <p id="numberOfDays"></p>
</div>

<script>
  $(document).ready(function() {
    $('#customDate').click(function() {
      $('#daterange').prop('disabled', false); // Enable date range input when custom dates are selected
    });

    $('#checkIn').click(function() {
      $('#daterange').prop('disabled', true); // Disable date range input when predefined dates are selected
    });

    // Datepicker initialization
    $('#daterange').datepicker({
      dateFormat: 'yy-mm-dd',
      rangeSelect: true // Enable range selection
    });

    // Show days button click event handler
    $('#calculateDays').click(function() {
      var dates = $('#daterange').val().split(' - '); // Split the selected dates
      var startDate = dates[0];
      var endDate = dates[1];

      var numberOfDays = Math.ceil((new Date(endDate) - new Date(startDate)) / (1000 * 60 * 60 * 24));

      $('#selectedDates').text("Start Date: " + startDate + ", End Date: " + endDate);
      $('#numberOfDays').text("Number of Days: " + numberOfDays);
      $('#result').show();
    });
  });
</script>

</body>
</html>
