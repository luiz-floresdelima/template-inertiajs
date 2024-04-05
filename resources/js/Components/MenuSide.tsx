import { Link } from '@inertiajs/react';

function MenuSide() {
    return (
        <div>
            <ul>
                <li>
                    <Link href={route('step1')}>Step-1</Link>
                </li>
                <li>
                    <Link href={route('step2')}>Step-2</Link>
                </li>
            </ul>
        </div>
    )
}

export { MenuSide }
