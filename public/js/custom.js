function capitalizeLetter(obj)
  {
      obj.value = obj.value.charAt(0).toUpperCase() + obj.value.slice(1);
  }

function capitalizeWord(obj)
  {
      obj.value = obj.value.split(' ').map(eachWord=>
        eachWord.charAt(0).toUpperCase() + eachWord.slice(1)
      ).join(' ');
  }
