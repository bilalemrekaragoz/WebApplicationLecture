$(document).ready(function(){
    $( function() {
        $( "#datepicker" ).datepicker();
      } );

    var languages = [
        "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ]
    $("#language").autocomplete({
        source:languages
    });
});