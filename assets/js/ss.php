<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $.ajax({
            type: "POST",
            url: "../Controller/main_controller.php",
            data: {name:name,test:test},
            cache: false,
            success: function (html) {
                
            },
            error: function (e) {
                alert(e);
            }
        });