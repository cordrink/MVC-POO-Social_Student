const allSideMenu = document.querySelectorAll('#sidebar .side-menu li a');

allSideMenu.forEach(item => {
    const li = item.parentElement;

    item.addEventListener('click', () => {

        allSideMenu.forEach(i => {
            i.parentElement.classList.remove('active');
        });
        
        li.classList.add('active');
    }); 
});