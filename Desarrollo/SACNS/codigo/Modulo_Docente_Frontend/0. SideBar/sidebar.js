if(sidebar.classList.contains("open")){
    document.getElementById('hogar').style.display='block';
    document.getElementById('hogar2').style.display='block';
    document.getElementById('nav-list').classList.remove('d-none');
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class

    }else {
        closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        document.getElementById('hogar').style.display='none';
        document.getElementById('hogar2').style.display='none';
       document.getElementById('nav-list').classList.add('d-none');
      }
     }
     