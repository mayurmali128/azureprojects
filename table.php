<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Hospital Info</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  <link rel="stylesheet" href="tablestyle.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  
</head>

<body>
<header class="text-gray-400 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
      <a class="mr-5 hover:text-white" href="index.html">Home</a>
      <a class="mr-5 hover:text-white" href="hospitallogin.html">Hospitals login</a>
      <a class="mr-5 hover:text-white" href="https://www.mohfw.gov.in/">Covid Status</a>
      <a class="hover:text-white" href="https://www.cowin.gov.in/">Get Vaccine</a>
    </nav>
    <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-white lg:items-center lg:justify-center mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl xl:block lg:hidden">Covid-19</span>
    </a>
    <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
      <button class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Help
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>
  </div>
</header>



<h1>
  Covid Hospitals
</h1>
<p>
  (Hospital names and availibilitty given below:)
</p>
<main>
  <table>
    <thead>
      <tr>
        <th>
          Hospital Name
        </th>
        <th>
          No of Beds available
        </th>
        <th>
          No of oxygen cylinders available
        </th>
        <th></th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th colspan='3'>
          Year: 2021
        </th>
      </tr>
    </tfoot>
    <tbody>

      <?php  
        require 'connect.php';
        $record2 = $collection2->find();
        foreach($record2 as $int){
            echo "<tr>
              <td>".
                $int['name']."
              </td>
              <td>".
                $int['nbed']."
              </td>
              <td>".
                $int['ncyn']."
              </td>";
        }
      ?>
    </tbody>
  </table>
 
</main>



</body>




  
</html>