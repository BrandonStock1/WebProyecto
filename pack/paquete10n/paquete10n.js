// Get all the images
image_array = [
    '1.jpg',
    '2.jpg',
    '3.jpg',
    '4.jpg',
    '5.jpg',
    '6.jpg',
    '7.jpg',
    '8.jpg',
    '9.jpg',
    '10.jpg',
    '11.jpg',
    '12.jpg',


  ]
  

  window.setTimeout(get_random_image, 3000);

  function get_random_image(){
      // Get a random index
    random_index1 = Math.floor(Math.random() * image_array.length);
    random_index2 = Math.floor(Math.random() * image_array.length);
    random_index3 = Math.floor(Math.random() * image_array.length);
    random_index4 = Math.floor(Math.random() * image_array.length);
    random_index5 = Math.floor(Math.random() * image_array.length);
    random_index6 = Math.floor(Math.random() * image_array.length);
    random_index7 = Math.floor(Math.random() * image_array.length);
    random_index8 = Math.floor(Math.random() * image_array.length);
    random_index9 = Math.floor(Math.random() * image_array.length);
    random_index10 = Math.floor(Math.random() * image_array.length);

  
    // Get an image at the random_index
    selected_image1 = image_array[random_index1]
    selected_image2 = image_array[random_index2]
    selected_image3 = image_array[random_index3]
    selected_image4 = image_array[random_index4]
    selected_image5 = image_array[random_index5]
    selected_image6 = image_array[random_index6]
    selected_image7 = image_array[random_index7]
    selected_image8 = image_array[random_index8]
    selected_image9 = image_array[random_index9]
    selected_image10 = image_array[random_index10]

  
    // Display the image
    document.getElementById('image_shower1').src = `../../assets/pics/${selected_image1}`
    document.getElementById('image_shower2').src = `../../assets/pics/${selected_image2}`
    document.getElementById('image_shower3').src = `../../assets/pics/${selected_image3}`
    document.getElementById('image_shower4').src = `../../assets/pics/${selected_image4}`
    document.getElementById('image_shower5').src = `../../assets/pics/${selected_image5}`
    document.getElementById('image_shower6').src = `../../assets/pics/${selected_image6}`
    document.getElementById('image_shower7').src = `../../assets/pics/${selected_image7}`
    document.getElementById('image_shower8').src = `../../assets/pics/${selected_image8}`
    document.getElementById('image_shower9').src = `../../assets/pics/${selected_image9}`
    document.getElementById('image_shower10').src = `../../assets/pics/${selected_image10}`

      
    
    
    document.getElementById(visualizar).style.visibility = "hidden";
    }
  


  