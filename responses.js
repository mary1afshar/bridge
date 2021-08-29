function getBotResponse(input) {
    let chat = input.toLowerCase();
    if(chat == "hi" || chat == 'hey' || chat == "hello"){
        return "Hey!";
    } else if (chat == "i am maryam") {
        return "Hi Maryam! I am Becky."
    } else if (chat == "hi! becky. it is good to talk to you"){
        return "Same here, Maryam!";
    } else if (chat=="thanks. you are a ui/ux developer at @boa, right? that is so cool.") {
        return "Thanks, Maryam! I checked out your GitHub you are such a wonderful UI/UX Designer. Are you looking for coop?";
    } else if (chat == "yes, i am!") {
        return "That is awesome! BOA is always looking for talented and empowering females as yourself. Would You like to intern at BOA this term?";
    } else if (chat == "yes, i would love to") {
        return "Amazing, I am excited to work with you. I encourage you to apply to our internship program for UI/UX Designer and Software Developers this summer, and I will get the formalities sorted with the HR.";
    } else if(chat == "omg! thank you so much for your mentorship. i am so excited to join you this term."){
        return "It is my pleasure, Maryam. I am looking forward to work with talented women like yourself!"
    } else if (chat == "thankyou i am looking forward to working with you and the entire team at boa") {
        return "My pleasure!";
    } else {
        return "heart clicked!";
    }
}