import { Route, Redirect, Switch } from 'react-router-dom';
import EditableTable from './EditableTable/EditableTable.jsx';
import BestMembers from "./Report/Components/BestMembers";
import GroupActivity from "./Report/GroupActivity";
import React from "react";
import css from "../work.module.css";


function Workspace(props) {
	return ( // TODO: refactor
			<div className={`row align-items-center`}>
				<div className={`d-flex justify-content-center`} >
					<Switch>
						<Route exact path="/work">
							<Redirect to="/work/members" />
						</Route>

						<Route exact path="/work/events">
							<EditableTable tableName='events' name={props.name} data={props.data} columns={props.columns} />
						</Route>

						<Route exact path="/work/activities">
							<EditableTable tableName='activities' name={props.name} data={props.data} columns={props.columns} />
						</Route>

						<Route exact path="/work/members">
							<EditableTable tableName='members' name={props.name} data={props.data} columns={props.columns} />
						</Route>

						<Route exact path="/work/positions">
							<EditableTable tableName='positions' name={props.name} data={props.data} columns={props.columns} />
						</Route>

						<Route exact path="/work/bestMembers">
							<BestMembers tableName='bestMembers' name={props.name} data={props.data} columns={props.columns} />
						</Route>

						<Route exact path="/work/groupActivity">
							<GroupActivity tableName='groupActivity' name={props.name} data={props.data} columns={props.columns} />
						</Route>
					</Switch>
				</div>
		</div>
	)
}


export default Workspace;