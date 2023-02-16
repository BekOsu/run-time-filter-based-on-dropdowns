<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>milele motors</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
    .container {
      margin: 0 auto;
      max-width: 600px;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    select {
      display: block;
      margin: 10px 0;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
      background-color: #fff;
    }

    button {
      display: block;
      margin: 10px 0;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      border: none;
      background-color: #4CAF50;
      color: #fff;
    }
  </style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
    // Show the wholeseller selection box when supplier is selected
    $('#supplier').change(function() {
      var supplier = $(this).val();
      if(supplier != '') {
        $('#wholeseller').show();
      } else {
        $('#wholeseller').hide();
        $('#steering').hide();
        $('#model').hide();
        $('#sfx').hide();
        $('#variant').hide();
        $('#color').hide();
      }
    });
  
    // Show the steering selection box when wholeseller is selected
    $('#wholeseller').change(function() {
      var wholeseller = $(this).val();
      if(wholeseller != '') {
        $('#steering').show();
      } else {
        $('#steering').hide();
        $('#model').hide();
        $('#sfx').hide();
        $('#variant').hide();
        $('#color').hide();
      }
    });

    // Show the btn when steering is selected
    $('#steering').change(function() {
      var steering = $(this).val();
      if(steering != '') {
        $('#submit-button').show();
      } else {
        $('#steering').hide();
        $('#model').hide();
        $('#sfx').hide();
        $('#variant').hide();
        $('#color').hide();
      }
    });
    
  // Add an event listener to the submit button
$('#submit-button').on('click', function() {
  // Get the selected values from the three selection boxes
  var supplier = $('#supplier').val();
  var wholeseller = $('#wholeseller').val();
  var steering = $('#steering').val();

 // Filter the results based on the selected values
 var filteredResults = filterResults(supplier, wholeseller, steering);

// Move to the next page with the filtered results
console.log("Hello world!");
window.location.href = '/next-page?supplier=' + supplier + '&wholeseller=' + wholeseller + '&steering=' + steering + '&results=' + JSON.stringify(filteredResults);
});

function filterResults(supplier, wholeseller, steering) {
// Send an AJAX request to the server to filter the results
// ...

// Receive the filtered results in JSON format and return them
return [
  { id: 1, name: 'Result 1' },
  { id: 2, name: 'Result 2' },
  { id: 3, name: 'Result 3' }
];
}

});
</script>

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

                                <!-- View for the first 3 selection boxes -->

    <div class="container">
        <select id="supplier">
        <option value="">Select supplier</option>
        <option value="supplier1">Supplier One</option>
        <option value="supplier2">Supplier Two</option>
        <option value="supplier3">Supplier Three</option>
        </select>

        <select id="wholeseller" style="display:none;">
        <option value="">Select wholeseller</option>
        <option value="wholeseller1">Whole seller One</option>
        <option value="wholeseller2">Whole seller Two</option>
        <option value="wholeseller3">Whole seller Three</option>
        </select>

        <select id="steering" style="display:none;">
        <option value="">Select steering type</option>
        <option value="steering1">Left Hand Driven (LHD)</option>
        <option value="steering2">Right Hand Driven (RHD)</option>
        </select>

        <button id="submit-button" style="display:none;" type="submit">Submit</button>

        </div>
            </div>
            </div>
        </div>
    </body>
</html>


