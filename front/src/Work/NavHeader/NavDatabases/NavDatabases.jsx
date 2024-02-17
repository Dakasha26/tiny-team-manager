import { NavLink } from 'react-router-dom';
import { connect } from 'react-redux';
import 'bootstrap/dist/css/bootstrap.min.css';
import css from './navDatabases.module.css';


function NavDatabases(props) {

	let navDatabases = props.navDatabases.map(el => {
		return(
			<li>
				<NavLink className="dropdown-item" to={el.linkUrl}>
					{ el.linkName }
				</NavLink>
			</li>
		)
	});

	return (
		<div className={`${props.className}`}>
			<ul className="nav nav-pills">
				<li className="nav-item dropdown">
					<NavLink className="nav-link dropdown-toggle" data-bs-toggle="dropdown"  role="button" aria-expanded="false" to={"#"}>Списки </NavLink>
					<ul className="dropdown-menu">
						{navDatabases}
					</ul>
				</li>
				<li className="nav-item dropdown">
					<NavLink className="nav-link dropdown-toggle" data-bs-toggle="dropdown"  role="button" aria-expanded="false" to={"#"}>Справочники </NavLink>
					<ul className="dropdown-menu">
						{navDatabases}
					</ul>
				</li>
			</ul>
		</div>

	);
}

const mapStateToProps = (state) => {
	let s = state.work;
	return {
		navDatabases: s.navDatabases
	}
}


export default connect(mapStateToProps)(NavDatabases);