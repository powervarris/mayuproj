<x-app-layout>
    
<head>
<link rel="stylesheet" href="./css/tupad.css" />
</head>
<div class ="officials"> 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="white">
                <br>
                <br>
                <h1 class="text-center font-bold text-2xl mb-4">TUPAD APPLICATION FORM</h1>
                <form class="form-container">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" class="form-input" />

                    <label for="birthday" class="form-label">Birthday:</label>
                    <input type="date" id="birthday" class="form-input" />

                    <label for="age" class="form-label">Age:</label>
                    <input type="number" id="age" class="form-input" />

                    <label for="address" class="form-label">Address:</label>
                    <input type="text" id="address" class="form-input" />

                    <label for="contact-number" class="form-label">Contact Number:</label>
                    <input type="tel" id="contact-number" class="form-input" />

                    <button type="submit" class="form-submit">Submit</button>
                </form>
           </div>
 
        </div>
    </div>
    </div>
</x-app-layout>