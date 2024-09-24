<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blotter Record') }}
        </h2>
    </x-slot>
<head>
<link rel="stylesheet" href="./css/blotter.css" />
</head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table>
  <thead>
    <tr>
      <th scope="col">Blotter #</th>
      <th scope="col">Entry Number</th>
      <th scope="col">Date</th>
      <th scope="col">File</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>2015-213</td>
      <td>October 13, 2015</td>
      <td><a href="{{ asset('path/to/file1.pdf') }}" download>Download File 1</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2024-234</td>
      <td>January 9, 2024</td>
      <td><a href="{{ asset('path/to/file2.pdf') }}" download>Download File 2</a></td>
    </tr>

  </tbody>
</table>
           </div>


 
</x-app-layout>