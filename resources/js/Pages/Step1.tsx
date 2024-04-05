import { MainContent } from '@/Components/MainContent';
import { MenuSide } from '@/Components/MenuSide';
import { Table } from '@/Components/Table';
import { TableBody } from '@/Components/TableBody';

function Step1() {

    return (
        <div className="w-screen flex">
            <MenuSide />
            <MainContent>
                <Table>
                    <TableBody />
                </Table>
            </MainContent>
        </div>
    );
}

export default Step1;
