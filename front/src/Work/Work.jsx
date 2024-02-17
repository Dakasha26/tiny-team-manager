import { connect } from 'react-redux';
import css from './work.module.css';

import Workspace from './Workspace/Workspace.jsx';
// import NavDatabases from './NavHeader/NavDatabases/NavDatabases.jsx';
import NavHeader from './NavHeader/NavHeader.jsx';
import NavDatabases from "./NavHeader/NavDatabases/NavDatabases";
import 'bootstrap/dist/css/bootstrap.min.css';


function Work() {
	return(
		<div className={`${css.wrapper}`}>
			<div className={`${css.containerMy}`}>
				<NavHeader />
				<Workspace />
			</div>
		</div>
	)
}



export default Work;