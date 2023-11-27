/** 아이디 중복체크 */
function id_check() {
  window.open("id_check.php?id=" + document.form_join.id.value, "IDcheck",
  "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");

  // document.write("id_check.php?id=" + document.form_join.id.value, "IDcheck")
}

function input_check() {
  const id = document.form_join.id.value;
  const reg_exp = /^(?=.*[a-z])(?=.*[0-9]).{4,16}$/;
  // const reg_exp = new RegExp("^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{4,16}$");
  //정규표현식. 영어 대소문자, 대괄호[]에 특수문자 작성한 것만, 숫자. 4~16글자
  
// 아이디ID
  if( !id ){
    alert("아이디를 입력해주세요.");
    document.form_join.id.focus();  // id칸에 자동 focus
    return;
  }
  else if( !reg_exp.test(id) ){
    alert("4~16자의 영문 소문자, 숫자를 혼합해서 작성해주세요.");
    return false;
  }

// 비밀번호Password
  if( !document.form_join.pw.value){
    alert("비밀번호를 입력해주세요.");
    document.form_join.pw.focus();
    return;
  }
// 비밀번호확인Password1
  if( !document.form_join.pw1.value){
    alert("비밀번호 확인을 입력해주세요.");
    document.form_join.pw1.focus();
    return;
  }

/** 비밀번호가 일치하는지 */
  if( document.form_join.pw.value != document.form_join.pw1.value){
    alert("비밀번호가 일치하지 않습니다. 다시 입력해주세요.");
    document.form_join.pw.focus();
    document.form_join.pw.select();
    return;
  }

// 이름Name
  if( !document.form_join.name.value){
    alert("이름을 입력해주세요.");
    document.form_join.name.focus();
    return;
  }

// 전화번호PhoneNumber
  const ph = document.form_join.phone.value;
  const reg_exp2 = /^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/;
  if( !ph ){
    alert("전화번호를 입력해주세요.");
    document.form_join.phone.focus();
    return;
  }
/** 전화번호 체크 */
if( !reg_exp2.test(ph) ){
  alert("전화번호를 다시 입력해주세요.");
  document.form_join.phone.focus();
  return;
}

// 이메일Email
  const ema = document.form_join.email.value;
  if( !ema ){
    alert("이메일을 입력해주세요.");
    document.form_join.email.focus();
    return;
  }
/** 이메일 체크 */
  const reg_exp3 = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/;
  if( !reg_exp3.test(ema) ){
    alert("@를 포함해서 작성해주세요.");
    document.form_join.email.focus();
    return false;
  }
  document.form_join.submit();


  
  // if( !f.agree.checked ){
  //   alert("이용약관에 동의하셔야 회원가입을 할 수 있습니다.");
  //   f.agree.focus();
  //   return false;
  // }
  
  // if( !f.agree2.checked ){
  //   alert("개인정보 수집 및 이용에 동의하셔야 회원가입을 할 수 있습니다.");
  //   f.agree2.focus();
  //   return false;
  // }
  // return true;


  alert("회원가입을 환영합니다!");
}
