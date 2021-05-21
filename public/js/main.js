function detectScroll() {
    var urlName = window.location.href.split('/'),
     lastnamjeIn = urlName.length-1,
     bg ,
    w = document.getElementById("navbar")
    urlName[lastnamjeIn] == 'profile' ?( bg = '#000',w.style.backgroundColor = bg) : bg = 'transparent'
    $(window).scroll(function(e) {
        var t = $(window).scrollTop(),
            n = document.getElementById("navbar"),
            l = document.getElementById("navbar").getElementsByClassName("logo");
        t >= 100 ?
        (n.style.backgroundColor = "black", l[0].style.flex = "9%") : 
        t < 100 && (n.style.backgroundColor = bg, l[0].style.flex = "15%")
    }), $(document).ready(function() {
        let e = document.getElementById("footer"),
            t = window.innerHeight,
            n = window.innerWidth;
        1366 == t && 1024 == n && (e.style.position = "absolute", e.style.bottom = "0px")
    })
    console.log(urlName[lastnamjeIn],'ko')
}

function toggleMenu() {
    var e = document.getElementById("sideNav"),
        t = document.getElementById("sideMenu");
    "none" == e.style.display && "-500px" == t.style.marginRight ? (e.style.display = "block", setTimeout(() => {
        t.style.marginRight = "0px"
    }, 10)) : (t.style.marginRight = "-500px", setTimeout(() => {
        e.style.display = "none"
    }, 500))
}
detectScroll();

// Ammar
function changeTab(id,id2){
    console.log('ko')
    var 
    tabnxt = document.getElementById(id),
    tabpre = document.getElementById(id2)
    setTimeout(()=>{
        tabpre.style.display = 'none';
        tabnxt.style.display = 'block';
    },100)
}


(function ( $ ) {
    $.fn.imagePicker = function( options ) {
        
        // Define plugin options
        var settings = $.extend({
            // Input name attribute
            name: "",
            // Classes for styling the input
            class: "form-control btn btn-default btn-block",
            // Icon which displays in center of input
            icon: ""
        }, options );
        
        // Create an input inside each matched element
        return this.each(function() {
            $(this).html(create_btn(this, settings));
        });
 
    };
 
    // Private function for creating the input element
    function create_btn(that, settings) {
        // The input icon element
        var picker_btn_icon = $('<i class="'+settings.icon+'"></i>');
        
        // The actual file input which stays hidden
        var picker_btn_input = $('<input type="file" name="'+settings.name+'" />');
        
        // The actual element displayed
        var picker_btn = $('<div class="'+settings.class+' img-upload-btn"></div>')
            .append(picker_btn_icon)
            .append(picker_btn_input);
            
        // File load listener
        picker_btn_input.change(function() {
            if ($(this).prop('files')[0]) {
                // Use FileReader to get file
                var reader = new FileReader();
                
                // Create a preview once image has loaded
                reader.onload = function(e) {
                    var preview = create_preview(that, e.target.result, settings);
                    $(that).html(preview);
                }
                
                // Load image
                reader.readAsDataURL(picker_btn_input.prop('files')[0]);
            }                
        });

        return picker_btn
    };
    
    // Private function for creating a preview element
    function create_preview(that, src, settings) {
        
            // The preview image
            var picker_preview_image = $('<img src="'+src+'" class="img-responsive img-rounded" />');
            
            // The remove image button
            var picker_preview_remove = $('<button class="btn btn-link"><span class="glyphicon glyphicon-trash"></span></button>');
            
            // The preview element
            var picker_preview = $('<div class=" dflexi"></div>')
                .append(picker_preview_image)
                .append(picker_preview_remove);

            // Remove image listener
            picker_preview_remove.click(function() {
                var btn = create_btn(that, settings);
                $(that).html(btn);
            });
            
            return picker_preview;
    };
    
}( jQuery ));

$(document).ready(function() {
    $('.img-picker').imagePicker({name: 'images'});

    $('.fakeInpthum').on('click',function() {
        $('#thumbnailInp').click()
    })
    $('#thumbnailInp').change(function() {
        $('.fakeInpthum p').text(this.files && this.files.length ? this.files[0].name.split('.')[0] : '');
        $('.fakeInpthum button').text('Change')
    })

    $('.nav-pills a').on('click',function() {
        $('.mainSave').css('visibility', 'visible');
    });
    $('#reserLink').on('click',function() {
        $('.mainSave').css('visibility', 'hidden');
    });
    
})


var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
};