$(document).ready(function () {
    $('#add_item').on('click', function () {
        var item_name = $('#item_name').val();

        /**
         * add a check if item name is empty or not
         */
        if (item_name == '') {
            $('.itemname_error').show();
            $('.itemname_error').text('Item Name cannot be Empty.');
            return false;
        } else {
            /**
             * make an ajax call to add the item to database
             */
            $.ajax({
                type: 'POST',
                url: '/additem',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'item_name': item_name
                },
                success: function (data) {
                    if (data.status) {

                        $('.itemname_error').hide();
                        $('#item_name').val('');
                        $('#listitems').append('<option value="' + data.id + '">' + item_name + '</option>');
                    } else {

                        $('.itemname_error').show();
                        $('.itemname_error').text('Item Name already exists!');
                    }
                }
            });
        }
    });

    $('#search_rightSelected').on('click', function () {
        var item = $('#listitems').children("option:selected").val();
        var item_text = $('#listitems').children("option:selected").text();
        /**
         * make an ajax call to add item to user items
         */
        updateItemList(item, item_text, '1');
    });

    $('#search_leftSelected').on('click', function () {
        var item = $('#selecteditems').children("option:selected").val();
        var item_text = $('#selecteditems').children("option:selected").text();
        /**
         * make an ajax call to add item to user items
         */
        updateItemList(item, item_text, '0');
    });
});

function updateItemList(item, item_text, onlist) {
    if (item == '' || item == undefined) {
        $('.itemname_error').show();
        $('.itemname_error').text('Select atleaset one item to Swap.');
        return false;
    } else {
        $('.itemname_error').hide();
        $.ajax({
            type: 'POST',
            url: '/selecteditem',
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'item': item,
                'onlist': onlist
            },
            success: function (data) {

                if (onlist == '0') {
                    $('#listitems').append('<option value="' + item + '">' + item_text + '</option>');
                    $('#selecteditems option[value="' + item + '"]').remove();

                } else if (onlist == '1') {
                    $('#selecteditems').append('<option value="' + item + '">' + item_text + '</option>');
                    $('#listitems option[value="' + item + '"]').remove();
                }
            }
        });
    }
}
