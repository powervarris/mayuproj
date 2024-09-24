
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Barangay Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <head>
            <link rel="stylesheet" href="./css/navbar.css" />
            <link rel="stylesheet" href="./css/services.css" />
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Barangay Nagkaisang Nayon</title>


    </head>
        <div class="cont">
            

<div class="introductory" id="introductoryPages">
  <div class="title">
    <div class="icon">
    </div>
    BARANGAY INDIGENCY FORM
  </div>
  <img class="arrow" src="./images/arrow.png" />
</div>

  <div id="contentPages" style="display: none;">
    <div class="pages-table">
      <div class="pages-title">PAGES TITLE</div>
      <div class="pages-row">
        <div class="pages-cell">Online Application</div>
      </div>

      <div class="pages-row">
        <div class="pages-cell"> Personal Application Form</div>
        <div class="pages-cell">
          <img src="./images/download.png" alt="download" />
        </div>
      </div>

  </div>
</div>

<div class="introductory" id="termsAndConditions">
  <div class="title">
    <div class="icon">
    </div>
    CEDULA FORM
  </div>
  <img class="arrow" src="./images/arrow.png" />
</div>

  <div id="contentTermsAndConditions" style="display: none;">
    <div class="pages-table">
      <div class="pages-title">PAGES TITLE</div>
      <div class="pages-row">
        <div class="pages-cell">Personal Application Form</div>
        <div class="pages-cell">
        <img src="./images/download.png" alt="download" />
        </div>
      </div>

</div>
</div>

<div class="introductory" id="privacyPolicy">
  <div class="title">
    <div class="icon">
    </div>
    BARANGAY CLEARANCE
  </div>
  <img class="arrow" src="./images/arrow.png" />
</div>

  <div id="contentPrivacyPolicy" style="display: none;">
    <div class="pages-table">
      <div class="pages-title">PAGES TITLE</div>
      <div class="pages-row">
        <div class="pages-cell">Online Application</div>
      </div>


      <div class="pages-row">
        <div class="pages-cell">Personal Application Form</div>
        <div class="pages-cell">
        <img src="./images/download.png" alt="download" />
        </div>
      </div>
     
      </div>
      </div>    

<div class="introductory" id="tutorial">
  <div class="title">
    <div class="icon">
    </div>
    BARANGAY ACCREDITATION
  </div>
  <img class="arrow" src="./images/arrow.png" />
</div>

  <div id="contentTutorial" style="display: none;">
    <div class="pages-table">
      <div class="pages-title">PAGES TITLE</div>

      <div class="pages-row">
        <div class="pages-cell">Personal Application Form</div>
        <div class="pages-cell">
          <a href="tutedit.html">
            <img src="./images/download.png" alt="download"/>
          </a>
        </div>
      </div>
      

  </div>
</div>

<div class="introductory" id="about">
  <div class="title">
    <div class="icon">
    </div>
    BARANGAY BUSINESS PERMIT
  </div>
  <img class="arrow" src="./images/arrow.png" />
</div>

  <div id="contentAbout" style="display: none;">
    <div class="pages-table">
      <div class="pages-title">PAGES TITLE</div>
      <div class="pages-row">
        <div class="pages-cell">Online Application</div>
      </div>
      <div class="pages-row">
        <div class="pages-cell">Personal Application Form</div>
        <div class="pages-cell">
          <img src="./images/editbutton.png" alt="download" />

        </div>
      </div>
   



    </div>
  </div>
</div>

</div>



  <script>
  document.getElementById("introductoryPages").addEventListener("click", function() {
    var contentPages = document.getElementById("contentPages");
    contentPages.style.display = contentPages.style.display === "block" ? "none" : "block";
  });

  document.getElementById("termsAndConditions").addEventListener("click", function() {
    var contentTermsAndConditions = document.getElementById("contentTermsAndConditions");
    contentTermsAndConditions.style.display = contentTermsAndConditions.style.display === "block" ? "none" : "block";
  });

  document.getElementById("privacyPolicy").addEventListener("click", function() {
    var contentPrivacyPolicy = document.getElementById("contentPrivacyPolicy");
    contentPrivacyPolicy.style.display = contentPrivacyPolicy.style.display === "block" ? "none" : "block";
  });

  document.getElementById("tutorial").addEventListener("click", function() {
    var contentTutorial = document.getElementById("contentTutorial");
    contentTutorial.style.display = contentTutorial.style.display === "block" ? "none" : "block";
  });

  document.getElementById("about").addEventListener("click", function() {
    var contentAbout = document.getElementById("contentAbout");
    contentAbout.style.display = contentAbout.style.display === "block" ? "none" : "block";
  });
</script>

</body>
            </div>
        </div>
    </div>
</x-app-layout>
