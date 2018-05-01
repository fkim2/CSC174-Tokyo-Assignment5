<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>


<?php include "inc/html-top.inc"; ?>
<title>Administration Panel</title>  
<h1>Survey Data Management</h1>

<div class="container">  
            <div class="table-responsive">  
                <span id="result"></span>
                <div id="live_data"></div>                 
            </div>  
        </div>

<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
                $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var SeeTrash = $('#SeeTrash').text();
        var PickTrash = $('#PickTrash').text();  
        var PrevTrash = $('#PrevTrash').text();  
  
        if(SeeTrash == '')  
        {  
            alert("Enter your answer");  
            return false;  
        }
        if(PickTrash == '')  
        {  
            alert("Enter your answer");  
            return false;  
        }
        if(PrevTrash == '')  
        {  
            alert("Enter your answer");  
            return false;  
        }  
        
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{SeeTrash:SeeTrash, PickTrash:PickTrash, PrevTrash:PrevTrash},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
    function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
                $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.SeeTrash', function(){  
        var id = $(this).data("id1");  
        var vote = $(this).text();  
        edit_data(id, SeeTrash, "SeeTrash");  
    }); 
    $(document).on('blur', '.PickTrash', function(){  
        var id = $(this).data("id2");  
        var vote = $(this).text();  
        edit_data(id, PickTrash, "PickTrash");  
    });  
    $(document).on('blur', '.PrevTrash', function(){  
        var id = $(this).data("id3");  
        var vote = $(this).text();  
        edit_data(id, PrevTrash, "PrevTrash");  
    }); 
    
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id2");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>