import { connect } from 'react-redux';
import Members from './Сomponents/Members.jsx';
import Events from './Сomponents/Events.jsx';
import Activities from './Сomponents/Activities.jsx';
import css from './editableTable.module.css';
import Positions from "./Сomponents/Positions";
import 'bootstrap/dist/css/bootstrap.min.css';


function EditableTable(props) {
	let container;
	switch(props.tableName){
		case 'members':
			container = <div className={`${css.containerMy}`}><Members/></div>;
			break;
		case 'events':
			container = <div className={`container`}><Events/></div>;
			break;
		case 'activities':
			container = <div className={`container`}><Activities/></div>;
			break;
		case 'positions':
			container = <div className={`container`}><Positions/></div>;
			break;
	}
	return <div className={``}>{container}</div>;
}


export default EditableTable;