// Function to limit text to a specific number of characters
function limitDescriptionText(maxLength) {
    const descriptionElement = document.getElementById('description-text2');
    const fullText = descriptionElement.innerText; // Get the full text
    
    // If the text length exceeds the max length, truncate it
    if (fullText.length > maxLength) {
      const truncatedText = fullText.substring(0, maxLength); // Limit text
      descriptionElement.innerText = truncatedText; // Set truncated text
      console.log(truncatedText)
    }
  }
  
  // Limit description to 100 characters
  limitDescriptionText(40);