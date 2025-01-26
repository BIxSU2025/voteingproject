const menuButton = document.querySelector('.sign-in');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    
    menuButton.addEventListener('mouseenter', () => {
      dropdownMenu.style.display = 'block';
    });
    
    menuButton.addEventListener('mouseleave', () => {
      dropdownMenu.style.display = 'none';
    });
    
    dropdownMenu.addEventListener('mouseenter', () => {
      dropdownMenu.style.display = 'block';
    });
    
    dropdownMenu.addEventListener('mouseleave', () => {
      dropdownMenu.style.display = 'none';
    });
    