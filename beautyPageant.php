<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/beautyPageant.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <input type="checkbox" id=menu_control>
    <?php require_once("php/header.php");?>
    <div class="box"></div>
    <!-- 登入燈箱 -->
    <div class="loginBox">
        <i class="fas fa-times"></i>
        <h3>登入</h3>
        <div class="inputBox">
            <i class="fas fa-user fa-1x"></i><input type="text" id="username" placeholder="User">
        </div>
        <div class="inputBox">
            <i class="fas fa-key fa-1x"></i><input type="password" id="password" placeholder="Password">
        </div>
        <a href="memberCenter.html"><button class="commonBtn">登入</button></a>
        <p><a class="showRegistered">註冊</a> / <a class="showForgotPSW">忘記密碼</a></p>
    </div>
    <!-- 註冊燈箱 -->
    <div class="registeredBox">
        <i class="fas fa-times"></i>
        <h3>立即註冊</h3>
        <table>
            <tr>
                <th>會員帳號</th>
                <td><input type="text"></td>
            </tr>
            <tr><td colspan="2" class="prompt"><span>此帳號已有人使用 !</span></td></tr>
            <tr>
                <th>會員密碼</th>
                <td><input type="password"></td>
            </tr>
            <tr>
                <th>會員姓名</th>
                <td><input type="text"></td>
            </tr>
            <tr>
                <th>會員電話</th>
                <td><input type="tel"></td>
            </tr>
            <tr>
                <th>會員信箱</th>
                <td><input type="email"></td>
            </tr>
            <tr>
                <th>性別</th>
                <td>
                    <label>
                        <input type="radio" name="sex" value="">
                        <i class="fas fa-venus fa-2x"></i>
                    </label>
                    <label>
                        <input type="radio" name="sex" value="">
                        <i class="fas fa-mars fa-2x"></i>
                    </label>
                </td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" value="註冊帳號" class="commonBtn"></th>
            </tr>
        </table>
        <div><a class="backLogin">回到登入</a></div>
    </div>
    <!-- 忘記密碼燈箱 -->
    <div class="forgotBox">
        <i class="fas fa-times"></i>
        <h3>忘記密碼</h3>
        <p>請輸入您註冊時的會員信箱，我們會將新的密碼寄至您的信箱。</p>
        <div>會員信箱<input type="email"></div>
        <input type="submit" value="寄送密碼" class="commonBtn">
        <div><a class="backLogin">回到登入</a></div>
    </div>
    <!-- beauty pageant 第一屏幕 -->
    <div class="beautyPageantWrap">
        <div class="beautyRankingContainer">
            <div class="beautyRankingHeader">
                <div class="discoBallContainer">
                    <div id="discoBallLight"></div>
                    <div id="discoBall">
                        <div id="discoBallMiddle"></div>
                    </div>
                    <div class="light"></div>
                </div>
                <div class="beautyRankingSlogan">最土最有力</div>
                <button id="beautyRankingimgsBtn" class="beautyRankingBtn">季排名</button>
                <button id="beautyRankingimgsMonthBtn" class="beautyRankingBtn">總排名</button>
                <div class="beautyRankingSlogan">最俗最在地</div>
            </div>
            <div class="beautyRanking">
                <div id="beautyRankingimgs">
                    <div id="beautyRankingbg1" class="beautyRankingbg">
                        <img src="images/beautyPageant/rank/newVersionStage1.png" alt="">
                        <h3>霹靂大舞台</h3>
                        <div class="beautyRankingSocialBtns">
                            <i class="far fa-heart"></i>
                            <i class="far fa-comment" alt="留言"></i>
                            <i class="fas fa-external-link-alt" alt="分享"></i>
                            <i class="far fa-bookmark" alt="分享"></i>
                        </div>
                        <p class="likeCount">891個喜歡</p>
                    </div>
                    <div id="beautyRankingbg2" class="beautyRankingbg">
                       <img src="images/beautyPageant/rank/newVersionStage2.png"  alt=""onclick="window.location.href='beautyDiscuss.html'">
                        <h3>超級大舞台</h3>
                        <div class="beautyRankingSocialBtns">
                            <i class="far fa-heart"></i>
                            <i class="far fa-comment" alt="留言"></i>
                            <i class="fas fa-external-link-alt" alt="分享"></i>
                            <i class="far fa-bookmark" alt="分享"></i>
                        </div>
                        <p class="likeCount">1622個喜歡</p>
                    </div>
                    <div id="beautyRankingbg3" class="beautyRankingbg">
                        <img src="images/beautyPageant/rank/newVersionStage3.png" alt="">
                        <h3>火花大舞台</h3>
                        <div class="beautyRankingSocialBtns">
                            <i class="fas fa-heart"></i>
                            <i class="far fa-comment" alt="留言"></i>
                            <i class="fas fa-external-link-alt" alt="分享"></i>
                            <i class="far fa-bookmark" alt="分享"></i>
                        </div>
                        <p class="likeCount">384個喜歡</p>
                    </div>
                </div>
                <div id="beautyRankingimgsMonth">
                    <div id="beautyRankingbg4" class="beautyRankingbg">
                        <img src="images/beautyPageant/rank/newVersionStage2.png" alt="">
                        <h3>台南大舞台</h3>
                        <div class="beautyRankingSocialBtns">
                            <i class="far fa-heart"></i>
                            <i class="far fa-comment" alt="留言"></i>
                            <i class="fas fa-external-link-alt" alt="分享"></i>
                            <i class="far fa-bookmark" alt="分享"></i>
                        </div>
                        <p class="likeCount">123個喜歡</p>
                    </div>
                    <div id="beautyRankingbg5" class="beautyRankingbg">
                        <img src="images/beautyPageant/rank/newVersionStage3.png" alt="">
                        <h3>嬤嬤大舞台</h3>
                        <div class="beautyRankingSocialBtns">
                            <i class="far fa-heart"></i>
                            <i class="far fa-comment" alt="留言"></i>
                            <i class="fas fa-external-link-alt" alt="分享"></i>
                            <i class="far fa-bookmark" alt="分享"></i>
                        </div>
                        <p>789個喜歡</p>
                    </div>
                    <div id="beautyRankingbg6" class="beautyRankingbg">
                        <img src="images/beautyPageant/rank/newVersionStage1.png" alt="">
                        <h3>花火大舞台</h3>
                        <div class="beautyRankingSocialBtns">
                            <i class="far fa-heart"></i>
                            <i class="far fa-comment" alt="留言"></i>
                            <i class="fas fa-external-link-alt" alt="分享"></i>
                            <i class="far fa-bookmark" alt="分享"></i>
                        </div>
                        <p class="likeCount">456個喜歡</p>
                    </div>
                </div>
                <div class="paginationPanel">
                    <ul class="pagination">
                        <li id="dot0" class="pageDot"></li>
                        <li id="dot1" class="pageDot"></li>
                        <li id="dot2" class="pageDot"></li>
                    </ul>
                </div>
            </div>
        </div> 
        <div id="musicContent">
            <canvas id="canvasMusic"></canvas>
            <audio id="audioMusic" controls autoplay loop style="display : none" src="audios\backloop.mp3"></audio>
        </div>
    </div>
    
    <!-- 第二屏幕 選美大舞台-->
    <div class="beautyDiscWrap">
        
        <div class="beautyDiscContainer">
            <h2 class="titleBgi">花車大選美</h2>
            <div class="beautyDiscFilter">
                <!-- 選項篩選 全部時間 排序 上傳時間  還有一個上傳按鈕-->
            </div>
            <div class="beautyDiscStageContainer">
                <div class="beautyDiscIg">
                    <div class="beautyDiscIgMem">
                        <img src="images/beautyPageant/DiscStage/Lisa/lisa.png" alt="Lisa">
                        <div class="beautyDiscIgTopic">
                                <p class="beautyDiscIgMName">Lisa</p>
                                <p class="beautyDiscIgMNameCar">故人西辭黃鶴樓</p>
                        </div>
                        <div class="dotflip">
                            <i class="fas fa-ellipsis-h"></i>
                            <div class="dotpanel">
                                <li>檢舉</li>
                                <!-- <li>刪除</li> -->
                            </div>
                        </div>
                    </div>
                    <div class="beautyDiscIgMemStage">
                        <img src="images/beautyPageant/DiscStage/Lisa/newVersionStage1.png" alt="memID的車">
                    </div>
                    <div class="beautyRankingSocialBtns">
                        <i class="far fa-heart"></i>
                        <i class="far fa-comment" alt="留言"></i>
                        <i class="fas fa-external-link-alt" alt="分享"></i>
                        <i class="far fa-bookmark" alt="分享"></i>
                    </div>
                    <p class="likeCount">622個喜歡</p>
                    <div class="beautyDiscIgMemTextContainerWrap">
                        <div class="beautyDiscIgMemTextContainer">
                            <img src="images/beautyPageant/DiscStage/Alex/Alex.png" alt="Alex">
                                <p class="beautyDiscIgMName">Alex</p>
                                <p class="beautyDiscIgNameText">你的車好棒</p>
                        </div>
                        <div class="beautyDiscIgMemTextContainer">
                            <img src="images/beautyPageant/DiscStage/Alex/Alex.png" alt="Alex">
                                <p class="beautyDiscIgMName">Alex</p>
                                <p class="beautyDiscIgNameText">你的車斯溝已</p>
                        </div>
                    </div>
                    <div class="beautyDiscForm">
                        <img src="images/beautyPageant/DiscStage/Lisa/lisa.png" alt="Alex">
                        <form>
                            <input class="DiscTextArea" type="text" name="欄位名稱" placeholder="留言回覆...">
                            <input class="DiscSent" type="submit" value="送出">
                        </form>
                    </div>
                </div>
                <div class="beautyDiscIg">
                    <div class="beautyDiscIgMem">
                        <img src="images/beautyPageant/DiscStage/Lisa/lisa.png" alt="Lisa">
                        <div class="beautyDiscIgTopic">
                            <p class="beautyDiscIgMName">Lisa</p>
                            <p class="beautyDiscIgMNameCar">煙花三月下揚州</p>
                        </div>
                        <div class="dotflip">
                            <i class="fas fa-ellipsis-h"></i>
                            <div class="dotpanel">
                                <li>檢舉</li>
                                <!-- <li>刪除</li> -->
                            </div>
                        </div>
                    </div>
                    <div class="beautyDiscIgMemStage">
                        <img src="images/beautyPageant/DiscStage/Lisa/newVersionStage1.png" alt="memID的車">
                    </div>
                    <div class="beautyRankingSocialBtns">
                        <i class="far fa-heart"></i>
                        <i class="far fa-comment" alt="留言"></i>
                        <i class="fas fa-external-link-alt" alt="分享"></i>
                        <i class="far fa-bookmark" alt="分享"></i>
                    </div>
                    <p class="likeCount">622個喜歡</p>
                    <div class="beautyDiscIgMemTextContainerWrap">
                        <div class="beautyDiscIgMemTextContainer">
                            <img src="images/beautyPageant/DiscStage/Alex/Alex.png" alt="Alex">
                                <p class="beautyDiscIgMName">Alex</p>
                                <p class="beautyDiscIgNameText">你的車好棒</p>
                        </div>
                        <div class="beautyDiscIgMemTextContainer">
                            <img src="images/beautyPageant/DiscStage/Alex/Alex.png" alt="Alex">
                                <p class="beautyDiscIgMName">Alex</p>
                                <p class="beautyDiscIgNameText">你的車斯溝已</p>
                        </div>
                    </div>
                    <div class="beautyDiscForm">
                        <img src="images/beautyPageant/DiscStage/Lisa/lisa.png" alt="Alex">
                        <form>
                            <input class="DiscTextArea" type="text" name="欄位名稱" placeholder="留言回覆...">
                            <input class="DiscSent" type="submit" value="送出">
                        </form>
                    </div>
                </div>
                <div class="beautyDiscIg">
                    <div class="beautyDiscIgMem">
                        <img src="images/beautyPageant/DiscStage/Lisa/lisa.png" alt="Lisa">
                        <div class="beautyDiscIgTopic">
                            <p class="beautyDiscIgMName">Lisa</p>
                            <p class="beautyDiscIgMNameCar">孤帆遠影碧空盡</p>
                        </div>
                        <div class="dotflip">
                            <i class="fas fa-ellipsis-h"></i>
                            <div class="dotpanel">
                                <li>檢舉</li>
                                <!-- <li>刪除</li> -->
                            </div>
                        </div>
                    </div>
                    <div class="beautyDiscIgMemStage">
                        <img src="images/beautyPageant/DiscStage/Lisa/newVersionStage1.png" alt="memID的車">
                    </div>
                    <div class="beautyRankingSocialBtns">
                        <i class="far fa-heart"></i>
                        <i class="far fa-comment" alt="留言"></i>
                        <i class="fas fa-external-link-alt" alt="分享"></i>
                        <i class="far fa-bookmark" alt="分享"></i>
                    </div>
                    <p class="likeCount">622個喜歡</p>
                    <div class="beautyDiscIgMemTextContainerWrap">
                        <div class="beautyDiscIgMemTextContainer">
                            <img src="images/beautyPageant/DiscStage/Alex/Alex.png" alt="Alex">
                                <p class="beautyDiscIgMName">Alex</p>
                                <p class="beautyDiscIgNameText">你的車好棒</p>
                        </div>
                        <div class="beautyDiscIgMemTextContainer">
                            <img src="images/beautyPageant/DiscStage/Alex/Alex.png" alt="Alex">
                                <p class="beautyDiscIgMName">Alex</p>
                                <p class="beautyDiscIgNameText">你的車斯溝已</p>
                        </div>
                    </div>
                    <div class="beautyDiscForm">
                        <img src="images/beautyPageant/DiscStage/Lisa/lisa.png" alt="Alex">
                        <form>
                            <input class="DiscTextArea" type="text" name="欄位名稱" placeholder="留言回覆...">
                            <input class="DiscSent" type="submit" value="送出">
                        </form>
                    </div>
                </div>
                <div class="beautyDiscIg">
                    <div class="beautyDiscIgMem">
                        <img src="images/beautyPageant/DiscStage/Lisa/lisa.png" alt="Lisa">
                        <div class="beautyDiscIgTopic">
                            <p class="beautyDiscIgMName">Lisa</p>
                            <p class="beautyDiscIgMNameCar">唯見長江天際流</p>
                        </div>
                        <div class="dotflip">
                            <i class="fas fa-ellipsis-h"></i>
                            <div class="dotpanel">
                                <li>檢舉</li>
                                <!-- <li>刪除</li> -->
                            </div>
                        </div>
                    </div>
                    <div class="beautyDiscIgMemStage">
                        <img src="images/beautyPageant/DiscStage/Lisa/newVersionStage1.png" alt="memID的車">
                    </div>
                    <div class="beautyRankingSocialBtns">
                        <i class="far fa-heart"></i>
                        <i class="far fa-comment" alt="留言"></i>
                        <i class="fas fa-external-link-alt" alt="分享"></i>
                        <i class="far fa-bookmark" alt="分享"></i>
                    </div>
                    <p class="likeCount">622個喜歡</p>
                    <div class="beautyDiscIgMemTextContainerWrap">
                        <div class="beautyDiscIgMemTextContainer">
                            <img src="images/beautyPageant/DiscStage/Alex/Alex.png" alt="Alex">
                                <p class="beautyDiscIgMName">Alex</p>
                                <p class="beautyDiscIgNameText">你的車好棒</p>
                        </div>
                        <div class="beautyDiscIgMemTextContainer">
                            <img src="images/beautyPageant/DiscStage/Alex/Alex.png" alt="Alex">
                                <p class="beautyDiscIgMName">Alex</p>
                                <p class="beautyDiscIgNameText">你的車斯溝已</p>
                        </div>
                    </div>
                    <div class="beautyDiscForm">
                        <img src="images/beautyPageant/DiscStage/Lisa/lisa.png" alt="Alex">
                        <form>
                            <input class="DiscTextArea" type="text" name="欄位名稱" placeholder="留言回覆...">
                            <input class="DiscSent" type="submit" value="送出">
                        </form>
                    </div>
                </div>
                <div class="beautyDiscIg">
                    <div class="beautyDiscIgMem">
                        <img src="images/beautyPageant/DiscStage/Lisa/lisa.png" alt="Lisa">
                        <div class="beautyDiscIgTopic">
                            <p class="beautyDiscIgMName">Lisa</p>
                            <p class="beautyDiscIgMNameCar">李白果然好厲害</p>
                        </div>
                        <div class="dotflip">
                            <i class="fas fa-ellipsis-h"></i>
                            <div class="dotpanel">
                                <li>檢舉</li>
                                <!-- <li>刪除</li> -->
                            </div>
                        </div>
                    </div>
                    <div class="beautyDiscIgMemStage">
                        <img src="images/beautyPageant/DiscStage/Lisa/newVersionStage1.png" alt="memID的車">
                    </div>
                    <div class="beautyRankingSocialBtns">
                        <i class="far fa-heart"></i>
                        <i class="far fa-comment" alt="留言"></i>
                        <i class="fas fa-external-link-alt" alt="分享"></i>
                        <i class="far fa-bookmark" alt="分享"></i>
                    </div>
                    <p class="likeCount">622個喜歡</p>
                    <div class="beautyDiscIgMemTextContainerWrap">
                        <div class="beautyDiscIgMemTextContainer">
                            <img src="images/beautyPageant/DiscStage/Alex/Alex.png" alt="Alex">
                                <p class="beautyDiscIgMName">Alex</p>
                                <p class="beautyDiscIgNameText">你的車好棒</p>
                        </div>
                        <div class="beautyDiscIgMemTextContainer">
                            <img src="images/beautyPageant/DiscStage/Alex/Alex.png" alt="Alex">
                                <p class="beautyDiscIgMName">Alex</p>
                                <p class="beautyDiscIgNameText">你的車斯溝已</p>
                        </div>
                    </div>
                    <div class="beautyDiscForm">
                        <img src="images/beautyPageant/DiscStage/Lisa/lisa.png" alt="Alex">
                        <form>
                            <input class="DiscTextArea" type="text" name="欄位名稱" placeholder="留言回覆...">
                            <input class="DiscSent" type="submit" value="送出">
                        </form>
                    </div>
                </div>
                <div class="beautyDiscIg">
                    <div class="beautyDiscIgMem">
                        <img src="images/beautyPageant/DiscStage/Lisa/lisa.png" alt="Lisa">
                        <div class="beautyDiscIgTopic">
                            <p class="beautyDiscIgMName">Lisa</p>
                            <p class="beautyDiscIgMNameCar">好詩好詩</p>
                        </div>
                        <div class="dotflip">
                            <i class="fas fa-ellipsis-h"></i>
                            <div class="dotpanel">
                                <li>檢舉</li>
                                <!-- <li>刪除</li> -->
                            </div>
                        </div>
                    </div>
                    <div class="beautyDiscIgMemStage">
                        <img src="images/beautyPageant/DiscStage/Lisa/newVersionStage1.png" alt="memID的車">
                    </div>
                    <div class="beautyRankingSocialBtns">
                        <i class="far fa-heart"></i>
                        <i class="far fa-comment" alt="留言"></i>
                        <i class="fas fa-external-link-alt" alt="分享"></i>
                        <i class="far fa-bookmark" alt="分享"></i>
                    </div>
                    <p class="likeCount">622個喜歡</p>
                    <div class="beautyDiscIgMemTextContainerWrap">
                        <div class="beautyDiscIgMemTextContainer">
                            <img src="images/beautyPageant/DiscStage/Alex/Alex.png" alt="Alex">
                                <p class="beautyDiscIgMName">Alex</p>
                                <p class="beautyDiscIgNameText">你的車好棒</p>
                        </div>
                        <div class="beautyDiscIgMemTextContainer">
                            <img src="images/beautyPageant/DiscStage/Alex/Alex.png" alt="Alex">
                                <p class="beautyDiscIgMName">Alex</p>
                                <p class="beautyDiscIgNameText">你的車斯溝已</p>
                        </div>
                    </div>
                    <div class="beautyDiscForm">
                        <img src="images/beautyPageant/DiscStage/Lisa/lisa.png" alt="Alex">
                        <form>
                            <input class="DiscTextArea" type="text" name="欄位名稱" placeholder="留言回覆...">
                            <input class="DiscSent" type="submit" value="送出">
                        </form>
                    </div>
                </div>                   
            </div>
        </div>
    </div>

    <footer>
            <p>Copyright © 2019 Taiwan Great Stage Inc.</p>
            <p>All rights reserved</p>
            <div>
                <a href="#"><img src="images/facebook (1).png" alt="FB"></a> 
                <a href="#"><img src="images/instagram (1).png" alt="IG"></a> 
                <a href="#"><img src="images/youtube (1).png" alt="YouTube"></a>        
            </div>
        </footer>
    <script src="js/beautyRankingScale.js"></script>
    <script src="js/beautyPagentSwipe.js"></script>
    <script>
        
        /* 登入燈箱 JS*/
        // 點擊icon開啟登入燈箱----------------------------
        document.querySelector('.fas.fa-user').addEventListener('click', function (e){
            // 顯示登入燈箱
            let loginBox = document.querySelector('.loginBox');
            let style = window.getComputedStyle(loginBox, null).getPropertyValue('display');
            if(style=="block"){
                loginBox.style.setProperty('display',"none");
                e.target.style.setProperty('color',"#2cffff");
            }else{
                loginBox.style.setProperty('display',"block");
                e.target.style.setProperty('color',"rgb(252, 211, 28)");
            }
        })
        // 點擊關閉----------------------------
        document.querySelector('.loginBox .fa-times').addEventListener('click', function () {
            let loginBox = document.querySelector('.loginBox');
            let style = window.getComputedStyle(loginBox, null).getPropertyValue('display');
            if(style=="block"){
                loginBox.style.setProperty('display',"none");
            }
        })
        // 點擊註冊------------------------------
        document.querySelector('.loginBox .showRegistered').addEventListener('click', function () {
            // 隱藏登入燈箱
            let loginBox = document.querySelector('.loginBox');
            loginBox.style.setProperty('display',"none");
            // 顯示註冊燈箱
            let registeredBox = document.querySelector('.registeredBox');
            let style = window.getComputedStyle(registeredBox, null).getPropertyValue('display');
            if(style=="none"){
                registeredBox.style.setProperty('display',"block");
            }
        })
        // 點擊忘記密碼------------------------------
        document.querySelector('.loginBox .showForgotPSW').addEventListener('click', function () {
            // 隱藏登入燈箱
            let loginBox = document.querySelector('.loginBox');
            loginBox.style.setProperty('display',"none");
            // 顯示忘記密碼燈箱
            let forgotBox = document.querySelector('.forgotBox');
            let style = window.getComputedStyle(forgotBox, null).getPropertyValue('display');
            if(style=="none"){
                forgotBox.style.setProperty('display',"block");
            }
        })

        /* 註冊燈箱 JS*/
        // 點擊關閉----------------------------
        document.querySelector('.registeredBox .fa-times').addEventListener('click',function(){
            let registeredBox = document.querySelector('.registeredBox');
            let style = window.getComputedStyle(registeredBox, null).getPropertyValue('display');
            if(style=="block"){
                registeredBox.style.setProperty('display',"none");
            }
        })
        // 點擊回到登入----------------------------
        document.querySelector('.registeredBox .backLogin').addEventListener('click',function(){
            // 隱藏註冊燈箱
            let registeredBox = document.querySelector('.registeredBox');
            registeredBox.style.setProperty('display',"none");
            // 顯示登入燈箱
            let loginBox = document.querySelector('.loginBox');
            let style = window.getComputedStyle(loginBox, null).getPropertyValue('display');
            if(style=="none"){
                loginBox.style.setProperty('display',"block");
            }
        })

        /* 忘記密碼燈箱 JS*/
        // 點擊關閉----------------------------
        document.querySelector('.forgotBox .fa-times').addEventListener('click',function(){
            let forgotBox = document.querySelector('.forgotBox');
            let style = window.getComputedStyle(forgotBox,  null).getPropertyValue('display');
            if(style=="block"){
                forgotBox.style.setProperty('display',"none");
            }
        })
        // 點擊回到登入----------------------------
        document.querySelector('.forgotBox .backLogin').addEventListener('click',function(){
            // 隱藏忘記密碼燈箱
            let forgotBox = document.querySelector('.forgotBox');
            forgotBox.style.setProperty('display',"none");
            // 顯示登入燈箱
            let loginBox = document.querySelector('.loginBox');
            let style = window.getComputedStyle(loginBox, null).getPropertyValue('display');
            if(style=="none"){
                loginBox.style.setProperty('display',"block");
            }
        })
        
        //螢幕寬度
        let screenWidth = document.body.clientWidth;
        if(screenWidth<=768){
            
        }
    </script>
    <script src="js/musicBar.js"></script>
    <script src="js/dotReport.js"></script>
    <script src="js/navmenu.js"></script>
    <script src="js/discoBall.js"></script>
</body>
</html>