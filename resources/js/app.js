require('./bootstrap');

/*******************************
    Author : Sibin V M
    Title : Javascript
    Created Date : 12-06-2022
********************************/

// constants
const form = $('#form');

const title = $('#title');
const showImg = $('#showImg');
const image = $('#image');
const content = $('#content');

const errorMsg = $('#errorMsg');

const resetBtn = $('#resetBtn');
const submitBtn = $('#submitBtn');

const app = {
    // validate the create form or update form
    validateForm : function () {
        if (title.val() == '' || content.val() == '') {
            errorMsg.text('Please Fill All Fields!!!');
        }
        else {
            form.submit();
        }
    },

    // reset the form field values
    resetFields : function () {
        errorMsg.text('')
        title.val('');
        showImg.attr('src', imgUrl);
        image.val('');
        content.val('');
    },

    // error message for empty field in form
    errorMsg : function () {
        errorMsg.text('');
    },

    // preview the image
    preview : function () {
        showImg.attr('src', URL.createObjectURL(event.target.files[0]));
    }

};

// onclick events
title.click(function () {
    app.errorMsg();
});

content.click(function () {
    app.errorMsg();
});

resetBtn.click(function () {
    app.resetFields();
});

submitBtn.click(function () {
    app.validateForm();
});

//onchange events
image.change(function() {
    app.preview();
});

// toast a message
if (msg != '') {
    $(document).ready(function() {
        $(".toast").toast('show');
    });
};