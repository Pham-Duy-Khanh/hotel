$(document).ready(function(){
    var adminId = $("#lock").val();
    $("#submitLock").click(function() {
        $.ajax({
                url: '/checkAdmin',
                type: 'post',
                data: {
                    adminId: adminId
                },
                showLoader: true
            }
        ).done(
            function (response) {
                if (response) {
                    var deferred = $.Deferred();
                    self.hasRewardPoint(true);
                    totals.isLoading(true);
                    getPaymentInformationAction(deferred);
                    if (!self.earnPointWithAppliedPoints) {
                        self.point_total.pointEarn(0);
                    }
                    $.when(deferred).done(function () {
                        self.recalculateEarnPoint();
                    });
                    messageContainer.addSuccessMessage({
                        'message': $t('Points applied successfully.')
                    });
                }
            }
        );
    });
});
