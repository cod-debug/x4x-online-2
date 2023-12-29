Echo.channel('betting-status-'+eventIdString).listen('Bet', function(data) {

    if(data.status == "OPEN"){
        openBet();
    }

    if(data.status == "LAST CALL"){
        lastCall();
    }

    if(data.status == "CLOSED"){
        closeBet();
        //displayPossibleWinnings();
    }
});


Echo.channel('place-bet-'+eventIdString).listen('PlaceBet', function(data) {
    console.log(data);
    updateBets(data.betData.betOne,data.betData.betTwo,data.betData.betFive,data.betData.betTen,data.betData.betTwenty,data.betData.betForty);
});


Echo.channel('event-status-'+eventIdString).listen('EventStatus', function(data) {
    if(data.status == "open"){
        location.reload();
    }
});


Echo.channel('declare-winner-'+eventIdString).listen('DeclareWinner', function(data) {
    console.log(data.declareData);
    fightID = data.declareData.fight_id;
    fightNumber = data.declareData.fight_number;
    declareWinner(data.declareData.result,fightNumber);
    fillTrends(data.declareData.wins)
    myBetOne = 0;
    myBetTwo = 0;
    myBetFive = 0;
    myBetTen = 0;
    myBetTwenty = 0;
    myBetForty = 0;
    clearBets();
});

Echo.channel('send-notification-'+eventIdString).listen('SendNotification', function(data) {
    console.log(data);
    if(userID == data.notifData.user_id){
        updateWalletBalance(data.notifData.balance);
        resetBet();
        myBetOne = 0;
        myBetTwo = 0;
        myBetFive = 0;
        myBetTen = 0;
        myBetTwenty = 0;
        myBetForty = 0;
    }
});


Echo.channel('jump-number-'+eventIdString).listen('JumpFight', function(data) {
    $('#fight-number').text(data.fightNumber);
});


