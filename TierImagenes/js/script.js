$(document).ready(function() {
    let tierCount = 0;

    // Función para hacer sortable una lista de imágenes
    function makeSortable($list) {
        $list.sortable({
            connectWith: ".image-list",
            placeholder: "ui-state-highlight",
            revert: true,
            start: function(event, ui) {
                ui.item.addClass("dragging");
            },
            stop: function(event, ui) {
                ui.item.removeClass("dragging");
            }
        }).disableSelection();
    }

    // Nuevo tier y que sean sortable
    $("#addTier").click(function() {
        tierCount++;
        $("#tiers").append(`<div class="col-md-12 tier" data-tier="${tierCount}">
                                <h3>Tier ${tierCount}</h3>
                                <div class="image-list"></div>
                            </div>`);
        makeSortable($(`#tiers .tier[data-tier="${tierCount}"] .image-list`));
    });

    // Eliminar último tier
    $("#removeTier").click(function() {
        if (tierCount > 0) {
            $(`#tiers .tier[data-tier="${tierCount}"]`).remove();
            tierCount--;
        } else {
            alert("No hay más tiers para eliminar.");
        }
    });

    // Subir imagen en el primer tier
    $("#imageUpload").change(function(e) {
        Array.from(e.target.files).forEach((file) => {
            var reader = new FileReader();
            reader.onload = function(e) {
                var imgHtml = $("<div>").addClass("img-thumbnail").css({
                    width: "110px",
                    height: "110px",
                    "margin-right": "10px",
                    display: "flex",
                    "justify-content": "center",
                    "align-items": "center"
                });
                var img = $("<img>").css({
                    "max-height": "100px",
                    "max-width": "100%",
                    "object-fit": "cover"
                }).attr("src", e.target.result);
                imgHtml.append(img);
                $('#tiers .tier[data-tier="1"] .image-list').append(imgHtml);
            };
            reader.readAsDataURL(file);
        });
    });

});