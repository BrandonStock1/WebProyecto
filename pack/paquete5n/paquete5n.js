// Get all the images
image_array = [
    'uruguay.jpg',
    'croacia.jpg',
    'argentina.jpg',
    'brasil.jpg'
  ]
  
  function get_random_image(){
      // Get a random index
    random_index1 = Math.floor(Math.random() * image_array.length);
    random_index2 = Math.floor(Math.random() * image_array.length);
    random_index3 = Math.floor(Math.random() * image_array.length);
    random_index4 = Math.floor(Math.random() * image_array.length);
    random_index5 = Math.floor(Math.random() * image_array.length);

  
    // Get an image at the random_index
    selected_image1 = image_array[random_index1]
    selected_image2 = image_array[random_index2]
    selected_image3 = image_array[random_index3]
    selected_image4 = image_array[random_index4]
    selected_image5 = image_array[random_index5]

  
    // Display the image
    document.getElementById('image_shower1').src = `../../assets/img/${selected_image1}`
    document.getElementById('image_shower2').src = `../../assets/img/${selected_image2}`
    document.getElementById('image_shower3').src = `../../assets/img/${selected_image3}`
    document.getElementById('image_shower4').src = `../../assets/img/${selected_image4}`
    document.getElementById('image_shower5').src = `../../assets/img/${selected_image5}`

      
    
    
    document.getElementById(visualizar).style.visibility = "hidden";
    
  }
  