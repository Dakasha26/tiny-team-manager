import 'bootstrap/dist/css/bootstrap.min.css';
import css from './Header.module.css'
import {NavLink} from "react-router-dom";


function Header() {
    return (
        <header classname={`${css.Icon}`}>
            <NavLink className={`btn btn-primary ${css.back}`} to="/work">Назад</NavLink>
            <img src='/img/logo_rso.png' className={css.rightIcon}/>
        </header>
    )
}

export default Header;