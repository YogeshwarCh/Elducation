function getBotResponse(input) {
    //rock paper scissors
    let res = input.toLowerCase();
    if (res == "hello") {
        return "Hello there! <br> Please enter the name of technology or programming language you want to learn.";
    } else if (res == "good") {
        return "Nice! How can I help you?";
    } else if (res == "bad" || res=="not good") {
        return "Sorry to hear that. How can I help you?";
    } else if (res == "data structures") {
        return ['For Reference Material<br><a href="https://www.geeksforgeeks.org/data-structures/" target="_blank">Click here..</a><br><br>For Video Tutorials<br><a href="https://www.youtube.com/watch?v=xLetJpcjHS0&list=PLBlnK6fEyqRj9lld8sWIUNwlKfdUoPd1Y" target="_blank"> Click here...</a> <br><br><br><br><br> Are You Satisfied?'];
    } else if (res == "java") {
        return ['<a href="https://www.geeksforgeeks.org/java/" target="_blank">Click here to start learning..</a><br><a href="https://www.youtube.com/watch?v=yRpLlJmRo2w&list=PLfqMhTWNBTe3LtFWcvwpqTkUSlB32kJop" target="_blank"> Click here to start video tutorial...</a> <br><br><br><br><br> Are You Satisfied?'];
    } else if (res=="python") {
        return ['<a href="https://www.geeksforgeeks.org/python-programming-language/" target="_blank">Click here to start learning..</a><br><a href="https://www.youtube.com/watch?v=QXeEoD0pB3Elist=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3" target="_blank"> Click here to start video tutorial...</a> <br><br><br><br><br> Are You Satisfied?'];
    } else if(res=="c"){
        return ['<a href="https://www.geeksforgeeks.org/c-programming-language/" target="_blank">Click here to start learning..</a><br><a href="https://www.youtube.com/watch?v=irqbmMNs2Bo" target="_blank"> Click here to start video tutorial...</a> <br><br><br><br><br> Are You Satisfied?'];
    } else if(res=="cpp" || res=="c++"){
        return ['<a href="https://www.geeksforgeeks.org/c-plus-plus/" target="_blank">Click here to start learning..</a><br><a href="https://www.youtube.com/watch?v=j8nAHeVKL08&list=PLu0W_9lII9agpFUAlPFe_VNSlXW5uE0YL" target="_blank"> Click here to start video tutorial...</a> <br><br><br><br><br> Are You Satisfied?'];
    } else if(res=="javascript"){
        return ['<a href="https://www.geeksforgeeks.org/javascript/" target="_blank">Click here to start learning..</a><br><a href="https://www.youtube.com/watch?v=hKB-YGF14SY" target="_blank"> Click here to start video tutorial...</a> <br><br><br><br><br> Are You Satisfied?'];
    } else if(res=="swift"){
        return ['<a href="https://www.geeksforgeeks.org/swift-programming-language/" target="_blank">Click here to start learning..</a><br><a href="https://www.youtube.com/watch?v=Ulp1Kimblg0" target="_blank"> Click here to start video tutorial...</a> <br><br><br><br><br> Are You Satisfied?'];
    } else if (res == "goodbye" || res=="bye") {
        return "Bye! Have a good day.";
    } else if (res == "yes") {
        return "ThankYou!, It was a pleasure guiding you.";
    } else if(res=="no"){
        return '<a href="select_plan.php" target="_blank">We got your back click here</a>';
    } else {
        return "Try asking something else!";
    }
    
    
}