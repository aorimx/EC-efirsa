$(document).ready(function () {
    
    
        $('.txtProfesionista').on('click', function () {
            $('.txtEmpresa').toggleClass('txtEmpresaGris');
            $('.txtProfesionista').toggleClass('txtProfesionistaRojo');
            $('.sliderEmpresa').toggleClass('gray');
            $('.sliderProfesionista').toggleClass('red');
            $('.marginHtc').toggleClass('marginHtcP');
            $('.adpBlock').toggleClass('tycNone');
            
        });
    
        $('.txtEmpresa').on('click', function () {
            $('.txtEmpresa').toggleClass('txtEmpresaGris');
            $('.txtProfesionista').toggleClass('txtProfesionistaRojo');
            $('.sliderEmpresa').toggleClass('gray');
            $('.sliderProfesionista').toggleClass('red');
            $('.marginHtc').toggleClass('marginHtcP');
            $('.adpBlock').toggleClass('tycNone');
        });
    
        
    });