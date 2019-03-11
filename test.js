var hw = document.getElementById("button1");
var i = 1;
hw.addEventListener('click', function () {
    text = document.getElementById("text");
    text.innerHTML = htmlarray[i];
    i++;
    if (i >= htmlarray.length) {
        i = 0;
    }
})

var htmlarray = new Array();

htmlarray[0] = "<input id=\'button1\' type=\"button\" value=\"다음\"><script src=\"test.js\"></script><br>삼성복원 솔루션은 컴퓨터에 문제가 발생하였을 경우 하드디스크를 복원하거나 백업할 수 있는 프로그램입니다.<br>삼성복원 솔루션은 Windows 상태에서뿐만 아니라 Windows로 부팅이 되지 않을 경우에도 사용할 수 있으며, 컴퓨터 부팅이 되지 않을 경우 부팅 초기 화면(삼성문자)에서 F4 키를 눌러 복원을 할 수 있습니다.";

htmlarray[1] =
"<input id=\"button1\" type=\"button\" value=\"다음2\"><script src=\"test.js\"></script><br><ol><li>PC 종료 후 재시작하기</li><br><li>윈도우 로고가 뜨기 전에 F4키 연타하기</li><br><li>아래와 같은 화면이 나오면, 방향키로 Samsung Recovery Solution을 선택 후 enter키 누르기</li><img src=\"img/삼성리커버리1.jpg\" width=\"50%\"></ol>";

htmlarray[2] =
"<input id=\'button1\' type=\"button\" value=\"다음\"><script src=\"test.js\"></script><br><ol><li>리커버리 솔루션 화면 확인하기</li><br><li><strong>복원</strong> 선택</li><img src=\"img/삼성리커버리2.jpg\" width=\"50%\"><br><br><li><strong>전체 복원</strong> 선택</li><img src=\"img/삼성리커버리3.jpg\" width=\"50%\"></ol>";

htmlarray[3] =
"<input id=\'button1\' type=\"button\" value=\"다음\"><script src=\"test.js\"></script><br><ol><li>복원 시점 목록 확인하기</li><br><li>설명란에 <strong>컴퓨터 초기 상태</strong>라고 되어있는 시점의 선택란에 체크<br><img src=\"img/삼성리커버리4.jpg\" width=\"50%\"><br>목록이 비어 있다면, 리커버리 손상을 의심해야한다.<br>2~3회 재시도 후, 전산실로 PC를 보낸다.</li><br><li>다음 클릭 후, Recovery Solution의 안내에 따라 진행하기</li></ol>";

htmlarray[4] =
"<input id=\'button1\' type=\"button\" value=\"처음으로\"><script src=\"test.js\"></script><br><ol><li>복원 완료 후, 네이트 온 설치</li><br><li>네이트 온 원격 제어를 통해 ERP, 오피스, 백신 등의 프로그램 설치 및 세부사항 설정하기</li><br></ol>";


var hw2 = document.getElementById("리커버리");
hw2.addEventListener('click', function () {
    text2 = document.getElementById("text");
    text2.innerHTML = htmlarray[0];
})