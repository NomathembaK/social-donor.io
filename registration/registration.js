//declearing html elements

const imgDiv = document.querySelector('.profile-pic-div');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');

//if user hover on img div 

imgDiv.addEventListener('mouseenter', function(){
    uploadBtn.style.display = "block";
});

//if we hover out from img div

imgDiv.addEventListener('mouseleave', function(){
    uploadBtn.style.display = "none";
});

//lets work for image showing functionality when we choose an image to upload

//when we choose a foto to upload

file.addEventListener('change', function(){
    //this refers to file
    const choosedFile = this.files[0];

    if (choosedFile) {

        const reader = new FileReader(); //FileReader is a predefined function of JS

        reader.addEventListener('load', function(){
            img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);

        //Allright is done

        //please like the video
        //comment if have any issue related to vide & also rate my work in comment section

        //And aslo please subscribe for more tutorial like this

        //thanks for watching
    }
});


( () => {
  /**
   * Parse a password string into a numeric value.
   *
   * @param {string} password
   * @return {number}
   */
  let evaluatePassword = ( password ) => {
    let score = 0;

    score = password.length;
    score = ( password.match( /[!]/gmi ) ) ? score + ( password.match( /[!]/gmi ).length * 3 ) : score;
    score = ( password.match( /[A-Z]/gm ) ) ? score + 3 : score;
    score = ( password.match( /[0-9]/gmi ) ) ? score + 3 : score;

    return score;
  };

  /**
   * Convert a numeric score into an object of 'DOM update' data.
   *
   * @param {number} score
   * @return {Object}
   */
  let scoreToData = ( score ) => {    
    if ( score >= 15 ) {
      return {
        width: '100%',
        color: '#26de81',
        label: 'Strong',
      };
    } else if ( score >= 8 ) {
      return {
        width: '66%',
        color: '#fd9644',
        label: 'Medium',
      };
    } else {
      return {
        width: '33%',
        color: '#fc5c65',
        label: 'Weak',
      };
    }
  };

  window.addEventListener( 'DOMContentLoaded', () => {
    // Get element refs.
    let p = document.querySelector( '.js--password' );
    let b = document.querySelector( '.js--password-bar' );
    let t = document.querySelector( '.js--password-text' );

    // Listen for updates to password field.
    p.addEventListener( 'input', () => {
      // Convert current value to data.
      let data = scoreToData( evaluatePassword( p.value ) );

      // Update DOM.
      b.style.width = data.width;
      b.style.background = data.color;
      t.innerText = data.label;
    } );
  } );
} )();


// fetch('https://api.ipregistry.co/?key=tryout')
//     .then(function (response) {
//         return response.json();
//     })
//     .then(function (payload) {
//         console.log(payload.location.country.name + ', ' + payload.location.city);
//     });



