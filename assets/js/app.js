/* ********************************************************************************************************* */
/*                                                                                                           */
/*                                               Variables                                                   */
/*                                                                                                           */
/* ********************************************************************************************************* */
const textContainer = document.getElementById('textContainer');

const fontMontserrat = document.getElementById('fontMontserrat');
console.log(fontMontserrat);
const fontPoppins = document.getElementById('fontPoppins');
console.log(fontPoppins);


/* ********************************************************************************************************* */
/*                                                                                                           */
/*                                               Functions                                                   */
/*                                                                                                           */
/* ********************************************************************************************************* */
textContainer.onclick = function() { 
      let tempArrClassList = [...textContainer.classList]
      
      tempArrClassList.forEach(element => {
            if (element == 'separateText' || element == 'joinText'){
                  if (element != 'separateText'){ 
                        textContainer.classList.remove('joinText')
                        this.classList.add('separateText');
                  } 
                  else{ 
                        textContainer.classList.remove('separateText')
                        textContainer.classList.add('joinText')
                  }
            }
      })
};

function setFirst(clicked_id) {
      if (clicked_id == 'fontMontserrat') {
            console.log('oui');
      }
      if (clicked_id == 'fontPoppins') {
            console.log('non');
      }
}



fontMontserrat.onclick = function() { 
      let tempArrClassList = [...textContainer.classList]

      tempArrClassList.forEach(element => {
            if (element == 'displayFirst'){
                  console.log("oui maman");
            }
            if (element == 'displayNext'){
                  console.log("oui papa");
            }
      })
};

fontMontserrat.onclick = function() { 
      let tempArrClassList = [...textContainer.classList]

      tempArrClassList.forEach(element => {
            if (element == 'displayFirst'){
                  console.log("non maman");
            }
            if (element == 'displayNext'){
                  console.log("non papa");
            }
      })
};
